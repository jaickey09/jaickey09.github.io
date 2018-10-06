<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select Model</title>
        <style>
            *{
                margin: 0px;
            }
            body{
                background-color: beige;
            }
            .d1{
                text-align: center;
            }
            input{
                margin-left: 100px;
            }
            table{
                margin-left: 60px;
            }
        </style>
    </head>
    <body>
        <div class="d1"><h1>
        <?php
        // put your code here
        echo 'Welcome '.$_POST['uname'];
        ?></h1>
        </div>
        
        <div class="d2">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="https://www.91-img.com/pictures/97744-v1-apple-iphone-7-mobile-phone-large-1.jpg" width="300px"
                 height="400px"> &nbsp;&nbsp;&nbsp;
            <img src="https://www.91-img.com/pictures/125689-v7-vivo-v9-mobile-phone-large-1.jpg" width="300px"
                 height="400px"> &nbsp;&nbsp;&nbsp;
            <img src="https://www.t-mobile.com/content/dam/t-mobile/en-p/cell-phones/samsung/samsung-galaxy-s9/lilac-purple/Samsung-Galaxy-S9-Lilac-Purple-1-3x.jpg" 
                 width="280px" height="400px">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <img src="https://www.android.com/static/2016/img/devices/phones/samsung-galaxy-s8/front-black_1x.png"
                 width="230px" height="400px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="https://rukminim1.flixcart.com/image/832/832/jd4u5jk0/mobile/v/4/g/htc-u11-2q4d100-original-imaf24fftx8nsdrc.jpeg?q=70"
                 width="200px" height="400px">
        </div>
        <div class="d3" style="">
            <form method="post" action="http://www.annatech.me/pageThree.php">
            <b><h2>
                    <input type="radio" name="r" value="1">I Phone7(28000) 
            <input type="radio" name="r" value="2">Vivo V7(18000) &nbsp;&nbsp;
            <input type="radio" name="r" value="3" checked>Samsung S9(38000) 
            <input type="radio" name="r" value="4">Samsung S8(34000) 
            <input type="radio" name="r" value="5">Desire (15000)
            <br><br>
            
           
            
                </h2>
            </b>
                
                <hr>
                <br>
                
                <b><h3>
                <table>
                    <tr>
                        <td>First Name :* </td>
                        <td><input type="text" required name="fname" size="100" placeholder="FName"></td>
                    </tr>
                    <tr>
                        <td>Last Name :* </td>
                        <td><input type="text" required name="lname" size="100" placeholder="LName"></td>
                    </tr>
                    <tr>
                        <td>Street Address :* </td>
                        <td><input type="text" required name="saddress" size="100" placeholder="Street Details"></td>
                    </tr>
                    <tr>
                        <td>City :* </td>
                        <td><input type="text" required name="city" size="100" placeholder="City"></td>
                    </tr>
                    <tr>
                        <td>State :* </td>
                        <td><input type="text" required name="state" size="100" placeholder="State"></td>
                    </tr>
                    <tr>
                        <td>Pincode :* </td>
                        <td><input type="text"  required name="pcode"  size="100"placeholder="Pincode"></td>
                    </tr>
                    
                    <tr>
                        <td>Quantity</td>
                        <td><input type="number" required="" min="1" max="4" placeholder="??????" name="qq" ></td>
                    </tr>
                </table> </h3> </b>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="s" value="Submit">
                <input type="reset" name="reset" value="Reset">
            </form>    
        </div>
    </body>
</html>
