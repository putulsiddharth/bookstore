<?php

    session_start();

    $al=explode("|",$_SESSION["ad"]);

?>

<style>
    body
    {
        background-image: url(images/5.jpg);
        color:white;
    }
    #home{
            margin-left:1040px
                
        }
    #ad
    {
        font-size: 1.4em;
    }
    #edit
    {
        
    }
    #shp
    {
        font-size: 1.4em;
    }
    #pr
    {
        font-size: 1.4em;
    }
    #cont
    {
        
    }



</style>
<br>

 <div id="home">
    <a style="text-decoration:none" href="book.php"><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a style="text-decoration:none" href="index.php"><font color="white">Logout</font></a>
    </div>
     <div style="position:absolute;right:0;top:0;">
        <a href="book's individual code/cart.php"><img src="images/cart1.png" height="50" width="90"></a>
    </div>

<fieldset>
    <legend>Delivery Details:</legend>
    
<div id="ad">
            <b><?php echo $al[0]?></b><br>
            <?php echo $al[1] ?><br>
            <?php echo $al[2] ?><br>
            <?php echo $al[3] ?><br>
            <?php echo $al[4] ?><br>
            Mobile:<b><?php echo $al[5] ?><br></b>
</div>

<form action="address.php" method="post">

        <button name="bt" value="1" id="edit">Edit/Change</button>

</form>
</fieldset>
<br/>
<fieldset>
    <legend>Order Details:</legend>
<div id="shp">

    <b>Standard Delivery</b><br>
    Get it by <?php 
    $to=getdate();
    $mth=[31,28,31,30,31,30,31,31,30,31,30,31];
    $month=$to["mon"];
    $d=$to["mday"]+4;
    if($d>$mth[$month-1])
    {
        $d=$to["mday"]+4-$mth[$month-1];
    }
    echo $d;
    ?> | Free Delivery

</div>

<div id="pr">

    Order Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["total"] ?><br>
    Delivery Charges&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0<br>
    Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $_SESSION["total"] ?></b><br>
    
    <form method="get" action="payment.php">
        <button id="cont">Continue</button>
    </form>

</div>
    
</fieldset>