import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Rectangle;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyEvent;
import java.awt.event.KeyListener;
import java.util.Random;
import javax.swing.*;

public class GamePlay extends JPanel implements KeyListener, ActionListener {

    private boolean play = false;
    private int score = 0;
    private int totalBricks;
    private Timer timer;
    private int delay = 8;
    private int playerX = 310;
    private int ballposX;
    private int ballposY;
    private int ballXDir = -1;
    private int ballYDir = -2;
    private int map[][];
    private MapGenerator map1;
    private Random r;

    public GamePlay() {
        r = new Random();
        ballposX = r.nextInt(150);
        ballposY = r.nextInt(123);
        map1 = new MapGenerator(r.nextInt(10), 7);
        totalBricks = map1.map.length * map1.map[0].length;
        addKeyListener(this);
        setFocusable(true);
        setFocusTraversalKeysEnabled(false);
        timer = new Timer(delay, this);
        timer.start();

    }

    @Override
    public void paint(Graphics g) {
        //backgrounds
        g.setColor(Color.BLACK);
        g.fillRect(1, 1, 692, 592);

        map1.draw((Graphics2D) g);
        //borders
        g.setColor(Color.YELLOW);
        g.fillRect(0, 0, 3, 592);
        g.fillRect(0, 0, 692, 3);
        g.fillRect(691, 0, 3, 592);

        //scores 
        g.setColor(Color.white);
        g.setFont(new Font("serif", Font.BOLD, 25));
        g.drawString("" + score, 590, 30);
        //the paddle
        g.setColor(Color.GREEN);
        g.fillRect(playerX, 550, 100, 8);
        //ball
        g.setColor(Color.yellow);
        g.fillOval(ballposX, ballposY, 20, 20);

        if (totalBricks <= 0) {
            play = false;
            ballXDir = 0;
            ballYDir = 0;
            g.setColor(Color.red);
            g.setFont(new Font("serif", Font.BOLD, 25 + 5));
            g.drawString("You Won " + score, 190, 300);
            g.setFont(new Font("serif", Font.BOLD, 25));
            g.drawString("Press enter to restart ", 230, 350);
        }
        if (ballposY > 570) {
            play = false;
            ballXDir = 0;
            ballYDir = 0;
            g.setColor(Color.red);
            g.setFont(new Font("serif", Font.BOLD, 25 + 5));
            g.drawString("Game Over Scores: " + score, 190, 300);
            g.setFont(new Font("serif", Font.BOLD, 25));
            g.drawString("Press enter to restart ", 230, 350);
        }
        g.dispose();
    }

    @Override
    public void keyTyped(KeyEvent e) {
    }

    @Override
    public void keyPressed(KeyEvent e) {
        if (e.getKeyCode() == KeyEvent.VK_RIGHT) {
            if (playerX >= 600) {
                playerX = 600;
            } else {
                moveRight();
            }
        }
        if (e.getKeyCode() == KeyEvent.VK_LEFT) {
            if (playerX < 10) {
                playerX = 10;
            } else {
                moveLeft();
            }

        }
        if (e.getKeyCode() == KeyEvent.VK_ENTER) {
            if (!play) {
                play = true;
                ballposX = 120;
                ballposY = 350;
                ballXDir = -1;
                ballYDir = -2;
                playerX = 310;
                score = 0;
                totalBricks = 21;
                map1 = new MapGenerator(r.nextInt(10), 7);
                repaint();

            }
        }
    }

    public void moveRight() {
        play = true;
        playerX = playerX + 25;
    }

    public void moveLeft() {
        play = true;
        playerX = playerX - 25;
    }

    @Override
    public void keyReleased(KeyEvent e) {
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        timer.start();
        if (play) {
            if (new Rectangle(ballposX, ballposY, 20, 20).intersects(new Rectangle(playerX, 550, 100, 8))) {
                ballYDir = -ballYDir;
            }
            A:
            for (int i = 0; i < map1.map.length; i++) {
                for (int j = 0; j < map1.map[0].length; j++) {
                    if (map1.map[i][j] > 0) {
                        int brickX = j * map1.brickWidth + 80;
                        int brickY = i * map1.brickHeight + 50;
                        int brickWidth = map1.brickWidth;
                        int brickHeight = map1.brickHeight;

                        Rectangle rect = new Rectangle(brickX, brickY, brickWidth, brickHeight);
                        Rectangle ballRect = new Rectangle(ballposX, ballposY, 20, 20);
                        Rectangle brickRect = rect;
                        if (ballRect.intersects(brickRect)) {
                            map1.setBrickValue(0, i, j);
                            totalBricks--;
                            score = score + 5;
                            if (ballposX + 19 <= brickRect.x || ballposX + 1 >= brickRect.x
                                    + brickRect.width) {
                                ballXDir = -ballXDir;
                            } else {
                                ballYDir = -ballYDir;
                            }
                            break A;
                        }
                    }
                }
            }
            ballposX += ballXDir;
            ballposY += ballYDir;
            if (ballposX < 0) {
                ballXDir = -ballXDir;
            }
            if (ballposY < 0) {
                ballYDir = -ballYDir;
            }
            if (ballposX > 670) {
                ballXDir = -ballXDir;
            }

        }
        repaint();
    }
}
