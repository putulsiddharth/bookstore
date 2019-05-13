<?php

    session_start();
    $al=explode("|",$_SESSION["ad"]);
?>

<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Arvo|ZCOOL+XiaoWei" rel="stylesheet">
    <title>Payment option</title>
    <style>
     body
    {
        background-image: url(images/5.jpg);
        color:white;
    }
         #home{
            margin-left:1040px
                
        }
        #ad{
            font-size: 1.2em;
            font-family: 'ZCOOL XiaoWei', serif;
            font-family: 'Arvo', serif;
        }
        #c1{
            height:50px;
            width:1350px;
            font-family: cursive;
            font-size: 25px;
            color: white;
            background-color: black;
        }
        #c2{
            height:50px;
            width:1350px;
            font-family: cursive;
            font-size: 25px;
            color: white;
            background-color: black;
        }
        #c3{
            height:50px;
            width:1350px;
            font-family: cursive;
            font-size: 25px;
            color: white;
            background-color: black;
        }
        #c4{
            height:40px;
            width:150px;
            font-family: cursive;
            font-size: 25px;
            background-color: black;
            color:white;
            
    
        }
        
    </style>
    </head>

    <body>
        <br>
            <div id="home">
    <a style="text-decoration:none" href="book.php"><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a style="text-decoration:none" href="index.php"><font color="white">Logout</font></a>
    </div>
             <div style="position:absolute;right:0;top:0;">
        <a href="book's individual code/cart.php"><img src="images/cart1.png" height="50" width="90"></a>
    </div>
        <fieldset>
        <legend>Payment Option</legend>
        <form action="cd.php">
        <input type="submit" value="Credit/Debit Card" id="c1">
        </form>
            
        <br><br>
        <form action="fn.php">
        <input type="submit" value="Cash on delivery" id="c2"><br>
        </form>
        
        <br>
        <form action="gp.php">
        <input type="submit" value="Google Pay" id="c3"><br><br>
        </form></fieldset><br>
        <fieldset>
            <legend>Delievery Details</legend>
        <h3><font color="white">DELIVER TO</font></h3>
        <div id="ad">
            <b><?php echo $al[0]?></b><br>
            <?php echo $al[1] ?><br>
            <?php echo $al[2] ?><br>
            <?php echo $al[3] ?><br>
            <?php echo $al[4] ?><br>
            Mobile:<b><?php echo $al[5] ?><br></b>
</div></fieldset>
       
        
    
    
</body>

</html>