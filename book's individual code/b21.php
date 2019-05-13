<?php
    if($_GET)
    {
        $bname="maniacal";
        $bprice=90;
        session_start();
        $_SESSION["M"]=$bname."|".$bprice."|"."M";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>maniacal</title>
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
 
    <img src="images\thriller\b21.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> 
The newly promoted Sergeant Jade Monroe, and her partner, Detective Jack Steele, have just been informed of an unidentified male body found at a local lake. The town is in an uproar. The victim was nearly decapitated, and murder simply doesn’t happen in North Bend.As more bodies turn up, the single connection between all of the victims becomes clear—it’s Jade, herself. 
With each new victim getting one step closer to Jade, time begins to tick away. She must find the person responsible before her loved ones, or herself, are targeted next. .</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.90</li>

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