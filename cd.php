<?php

    if($_POST)
    {
        $er=1;
        if(strlen((string)$_POST["cn"])!=16)
        {
            echo "<script>alert('Invalid Card length')</script>";
            $er=0;
        }
        $val=preg_match("/^[0-9][0-9][0-9]$/",$_POST["cvv"]);
        if($val==0)
        {
            echo "<script>alert('Invalid CVV')</script>";
            $er=0;
        }
        if($_POST["mth"]<=date('m') and $_POST["yr"]==date('Y'))
        {
         echo "<script>alert('Invalid Expiry Date')</script>";
            $er=0;
        }
        if($er==1)
        {
          header("Location: fn.php");  
        }
    
        
    }

?>


<html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Arvo|ZCOOL+XiaoWei" rel="stylesheet">
        <title>Payment</title>
        <style>
        
            input{
                width: 300;
                text-align: center;
            }
        
        </style>
    </head>


    <body>
        
        <style>
        
    body
    {
        background-image: url(images/2.jpeg);
        color:white;
    }
             #home{
            margin-left:1040px
                
        }
            #design{
                font-size: 1.2em;
                font-family: 'ZCOOL XiaoWei', serif;
                font-family: 'Arvo', serif;   
                margin-top: 50px;
            }
        
        </style>
                        <div id="home">
    <a style="text-decoration:none" href="book.php"><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a style="text-decoration:none" href="index.php"><font color="white">Logout</font></a>
    </div>
             <div style="position:absolute;right:0;top:0;">
        <a href="book's individual code/cart.php"><img src="images/cart1.png" height="50" width="90"></a>
    </div>
        <div id="design">
        <form method="post">
            Card Number*<br>
            <input type="number" name="cn" placeholder="Enter your 16-digit Card Number" required><br><br>
            Name on Card*<br>
            <input type="text" name="name" placeholder="Name on Card" required><br><br>
            Expiry Month*
            <select name="mth">
                <option value="1">Jan</option>
                <option value="2">Feb</option>
                <option value="3">Mar</option>
                <option value="4">Apr</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">Aug</option>
                <option value="9">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
            </select>
            Expiry Year*
            <select name="yr">
                <?php
                for($i=2019;$i<=2049;$i++)
                {
                    ?>
                <option value=<?php echo $i?>><?php echo $i?></option>
                <?php
                }
                ?>
            </select><br><br>
            CVV*<br>
            <input type="password" name="cvv" style="width:50" required><br><br>
            <input type="submit" value="Pay Now">
        </form></div>
        

    </body>
    
</html>