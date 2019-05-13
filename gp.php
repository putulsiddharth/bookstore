<?php

if($_POST)
{
    if(strlen((string)$_POST["num"])==10)
    {
        header("Location: fn.php");
    }
    else
    {
        echo "<script>alert('Invalid Mobile Number')</script>";
    }
}

?>


<html>
    <head>
     <link href="https://fonts.googleapis.com/css?family=Arvo|ZCOOL+XiaoWei" rel="stylesheet">
    </head>
    <style>
    body
    {
        background-image: url(images/2.jpeg);
        color:white;
    }
        #gpay{
                font-size: 1.2em;
                font-family: 'ZCOOL XiaoWei', serif;
                font-family: 'Arvo', serif; 
        }
         #home{
            margin-left:1040px
                
        }
        h1{
                         font-family: 'ZCOOL XiaoWei', serif;
                font-family: 'Arvo', serif; 
        }
        img{
            opacity: 0.2;
        }
        img:hover{
            opacity: 1;
        }
        .gpp{
            position: absolute;
            top:200;
        }
    </style>
                    <div id="home">
    <a style="text-decoration:none" href="book.php"><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a style="text-decoration:none" href="index.php"><font color="white">Logout</font></a>
    </div>
             <div style="position:absolute;right:0;top:0;">
        <a href="book's individual code/cart.php"><img src="images/cart1.png" height="50" width="90"></a>
    </div>
    <h1><center>Don't Stress yourself , pay on the web itself..</center></h1>
    <h1><center>Go Cashless , Go Green..</center></h1>

    <div id="gpay" class="gpp">
    <form method="post">
        <br><br> 
        G-pay here*<br>
        <input type="tel" name="num" value="9801253677" readonly><br><br>
        <input type="submit" value="Click"><br>
    </form></div>
    
    <div class="gpp" style="position:absolute;right: 0;">
        <h2>Or Scan The QR</h2>
        <img src="images/QR.jpeg" height="250">
    </div>
        

</html>