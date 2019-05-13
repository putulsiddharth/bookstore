<?php
    if($_GET)
    {
        $bname="The good daughter";
        $bprice=100;
        session_start();
        $_SESSION["TGD"]=$bname."|".$bprice."|"."TGD";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>The good daughter</title>
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
 
    <img src="images\thriller\b24.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> 
Two girls are forced into the woods at gunpoint. One runs for her life. One is left behind…Twenty-eight years ago, Charlotte and Samantha Quinn's happy small-town family life was torn apart by a terrifying attack on their family home. It left their mother dead. It left their father — Pikeville's notorious defense attorney — devastated. And it left the family fractured beyond repair, consumed by secrets from that terrible night.Twenty-eight years later, and Charlie has followed in her father's footsteps to become a lawyer herself — the ideal good daughter. But when violence comes to Pikeville again — and a shocking tragedy leaves the whole town traumatized — Charlie is plunged into a nightmare.
</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.100</li>

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