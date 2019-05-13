<?php

     session_start();
    if($_GET)
    {
       if(preg_match("/^[0-9][0-9][0-9][0-9][0-9][0-9]$/",$_GET["pin"]) and preg_match("/^[a-zA-Z]+[\s]?[a-zA-Z]$/",$_GET["city"]) and preg_match("/^[a-zA-Z]+[\s]?[a-zA-Z]+$/",$_GET["state"]) and preg_match("/^[a-zA-Z]+[\s]?[a-zA-Z]+$/",$_GET["name"]) and strlen($_GET["mob"])==10)
       {
           $vl=$_GET["name"]."|".$_GET["hs"]."|".$_GET["ar"]."|".$_GET["city"]."-".$_GET["pin"]."|".$_GET["state"]."|".$_GET["mob"];
        $_SESSION["ad"]=$vl;
        
        header("Location: proceed.php");
       }
        else
        {
            echo "<script>alert('Invalid Input')</script>";
            
        }
    }
?>


<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Arvo|ZCOOL+XiaoWei" rel="stylesheet">
    <title>Address</title>
    <center><h2>Enter your Address here...</h2></center><hr>
    <style>
        body{
            background-image: url(images/5.jpg);
            color:white;
             font-family: 'ZCOOL XiaoWei', serif;
            font-family: 'Arvo', serif;
        }
    </style>
</head>
<body>
    <form method="get">
        Pincode<br>
        <input type="text" name="pin" required><br><br>
        House No.,Building name<br>
        <textarea rows=4 cols=50 name="hs" required></textarea><br><br>
        Area or Colony<br>
        <textarea rows=4 cols=50 name="ar" required></textarea><br><br>
        <div>
        City<br>
        <input type="text" name="city" required>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div>
        state<br>
            <input type="text" name="state" required>
        </div>
        <br><br>
        Name<br>
        <input type="text" name="name" required><br><br>
        Mobile<br>
        <input type="tel" name="mob" required><br><br>
        Address type<br>
        <input type="radio" name="add" checked>Home Address<br>
        <input type="radio" name="add">Work/Office Address<br><br>
        <input type="submit" name="sub" value="SAVE" size="50">
        
        
    </form>
    
</body>
</html>