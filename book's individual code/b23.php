<?php
    if($_GET)
    {
        $bname="blood lust";
        $bprice=93;
        session_start();
        $_SESSION["BL"]=$bname."|".$bprice."|"."BL";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>blood lust</title>
    <style>
        #a1{
            height:30px;
            width:100px;
        }
    </style>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>
</head>
<body>
 
    <img src="images\thriller\b23.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> 
If you love Sam and Dean, then you’re going to adore The Blood Sisters! Hunting demons, kicking ass and saving people is what they do. 
When an evil gang spreads demon essence drugs throughout the mid-west, Jessica and Amanda Blood are hot on their trail. Until Amanda is kidnapped by demons eager to collect the bounty placed on the sisters’ heads by queen of the underworld. Jessica will go to the ends of the Earth to find her healer sister, before Amanda is sacrificed and her pure blood used to open the gates of hell. But to get there, Jessica must ride with bad boy demon hunter Duncan Jasper and his gang. Too bad the only thing tougher than fighting demons is fighting her attraction to Duncan. .</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.93</li>

      </ul>
  </div>
  
</div>
       <div style="position:absolute;right:0;top:0;">
        <a href="cart.php"><img src="images/cart1.png" height="50" width="90"></a>
    </div>
    
    <br><br>
     <form method="get">
     <input type="hidden" name="done" value="1">
 <input type="submit" id="a1" value="Add to Cart">
    </form>
</body>
</html>