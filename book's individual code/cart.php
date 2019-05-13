<?php

    error_reporting(0);
ini_set('display_errors', 0);
    session_start();
    $tot=[];
    $_SESSION["all"]="";
    if($_SESSION)
    {
        if( $_SESSION['TBOG']!="no") #1
        {
            $tot[count($tot)]=explode("|",$_SESSION['TBOG']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        }
        if( $_SESSION['HP']!="no") #2
        {
            $tot[count($tot)]=explode("|",$_SESSION['HP']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        }
        if( $_SESSION['EITN']!="no") #3
        {
            $tot[count($tot)]=explode("|",$_SESSION['EITN']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
        }
        if( $_SESSION['TSOI']!="no") #4
        {
            $tot[count($tot)]=explode("|",$_SESSION['TSOI']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        }
        if( $_SESSION['TIH']!="no") #5
        {
            $tot[count($tot)]=explode("|",$_SESSION['TIH']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        }
        if( $_SESSION['TCW']!="no") #6
        {
            $tot[count($tot)]=explode("|",$_SESSION['TCW']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        }
        if( $_SESSION['TFIH']!="no") #7
        {
            $tot[count($tot)]=explode("|",$_SESSION['TFIH']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        }
        if( $_SESSION['IMH']!="no") #8
        {
            $tot[count($tot)]=explode("|",$_SESSION['IMH']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
        }
        if( $_SESSION['WG']!="no") #9
        {
            $tot[count($tot)]=explode("|",$_SESSION['WG']);
            
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
        }
        if( $_SESSION['HG']!="no") #10
        {
            $tot[count($tot)]=explode("|",$_SESSION['HG']);
            
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
        }
        if( $_SESSION['LG']!="no") #11
        {
            $tot[count($tot)]=explode("|",$_SESSION['LG']);
            
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
        }
        if( $_SESSION['IG']!="no") #12
        {
            $tot[count($tot)]=explode("|",$_SESSION['IG']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        }
        if( $_SESSION['RH']!="no") #13
        {
            $tot[count($tot)]=explode("|",$_SESSION['RH']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
            
        }
        if( $_SESSION['I2']!="no") #14
        {
            $tot[count($tot)]=explode("|",$_SESSION['I2']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
            
        }
        if( $_SESSION['P']!="no") #15
        {
            $tot[count($tot)]=explode("|",$_SESSION['P']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
            
        }
        if( $_SESSION['CB']!="no") #16
        {
            $tot[count($tot)]=explode("|",$_SESSION['CB']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
            
        }
        if( $_SESSION['A']!="no") #17
        {
            $tot[count($tot)]=explode("|",$_SESSION['A']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
            
        }
        if( $_SESSION['XM']!="no") #18
        {
            $tot[count($tot)]=explode("|",$_SESSION['XM']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
            
        }
        if( $_SESSION['CM']!="no") #19
        {
            $tot[count($tot)]=explode("|",$_SESSION['CM']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        }
        if( $_SESSION['CA']!="no") #20
        {
            $tot[count($tot)]=explode("|",$_SESSION['CA']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
            
        }
        if( $_SESSION['M']!="no") #21
        {
            $tot[count($tot)]=explode("|",$_SESSION['M']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
            
        }
        if( $_SESSION['TO']!="no") #22
        {
            $tot[count($tot)]=explode("|",$_SESSION['TO']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        
        }
        if( $_SESSION['BL']!="no") #23
        {
            $tot[count($tot)]=explode("|",$_SESSION['BL']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        }
        if( $_SESSION['TGD']!="no") #24
        {
            $tot[count($tot)]=explode("|",$_SESSION['TGD']);
            $_SESSION["all"]=$_SESSION["all"].$tot[count($tot)-1][0]."|";
            
        }
         
    }

?>


<table border="1">

    <tr>
        <th>Remove</th>
        <th>Sl No</th>
        <th>Book Name</th>
        <th>Book Price</th>
    </tr>
    <?php

    if($_GET)
    {
        $a=explode("|",$_GET["del"]);
        $_SESSION[$a[1]]="no";
        header("Location: cart.php");
    }
    
    $i=0;
    $sum=0;
    foreach($tot as $tt)
    {
        ?>
        <tr>
            <form method="get">
                <th><button value="<?php echo $i.'|'.$tt[2] ?>" name="del"><img src="images/red.png" height="20"></button></th>
                <th><?php echo $i+1 ?></th>
                <th><?php echo $tt[0] ?></th>
                <th><?php echo $tt[1] ?></th>
            </form>
        </tr>   
        <?php
            $i+=1;
            $sum+=$tt[1];
    }
    
    ?>
    
    <tr>
        <th colspan="3">Total</th>
        
        <th><?php echo $sum; ?></th>
    
    </tr>

    <?php
?>
</table>

<?php

    ?>


    <div>
            TOTAL MRP:<?php echo $sum;?><br>
            Estimated Tax:<?php echo $sum*0.18; $sum+=$sum*0.18;?><br>
            Delivery Charges:0
        <hr>
            Total :<?php echo $sum; $_SESSION["total"]=$sum;?>
    </div>


    <form method="POST">
        <button name="abc" value="1">PLACE ORDER</button>
    </form>
    <?php
    
    if($_POST)
    {
        header("Location: ../address.php");
    }
?>