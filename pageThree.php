<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Invoice</title>
        <style>
            *{
                margin: 20px;
            }
            body{
             margin: 0px;
             background-color: thistle;
            }
        </style>
    </head>
    <body>
        <div class="d1">
            <h1>Invoice/Reciept</h1>
        </div>
        <div class="d2" >
           <hr>
                <br>
                <?php
               
                if(isset($_POST['s']))
                    {
                     $ch=$_POST['r'];
                    $q=$_POST['qq'];
            global $p;
            global $dname;
            echo '<b>Product Details</b><hr>';
           if($ch==1){
               $dname='I Phone7';
               echo '<b>Device Name : '.'I Phone7'.'</b><br>';
               echo ' <b>Quantity : '.$q.'<b><br>';
               $p=$q*28000;
               echo ' <b>Total Price : '.'Rs '.$p."</b><br>"; 
           }
           if($ch==2){
               $dname='Vivo V7';
               echo '<b>Device Name : '.'Vivo V7'.'</b><br>';
               echo ' <b>Quantity : '.$q.'</b><br>';
               $p=$q*18000;
               echo ' <b>Total Price : '.'Rs '.$p."</b><br>"; 
           }
           if($ch==3){
               $dname='Samsung S9';
               echo '<b>Device Name : '.'Samsung S9'.'</b><br>';
               echo ' <b>Quantity : '.$q.'</b><br>';
               $p=$q*38000;
               echo ' <b>Total Price : '.'Rs '.$p."</b><br>"; 
           }
           if($ch==4){
               $dname='Samsung S8';
               echo '<b>Device Name : '.'Samsung S8</b><br>';
               echo ' <b>Quantity : '.$q.'</b></br>';
               $p=$q*34000;
               echo ' <b>Total Price : '.'Rs '.$p."</b><br>"; 
           }
           if($ch==5){
               $dname='Desire 10';
               echo '<b>Device Name : '.'Desire 10'.'</b><br>';
               echo ' <b>Quantity : '.$q.'</b><br>';
               $p=$q*15000;
               echo ' <b>Total Price : '.'Rs '.$p."</b><br>";
               
        }}
echo '<hr>';
        echo '<b>Address</b></br><hr>';
        echo '<b>'.$_POST['fname'].' '.$_POST['lname'].'</b><br>';
                echo '<b>'.$_POST['saddress'].'</b><br>';
                echo '<b>'.$_POST['city'].'</b><br>';
                echo '<b>'.$_POST['state'].'</b><br>';
                echo '<b>'.$_POST['pcode'].'</b><br>';
                echo '<b>Thank You Visit Again</b>';
        ?>
                <br>
                
                
                
                
            </h3>
        </div>
    </body>
</html>
