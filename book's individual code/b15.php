<?php
    if($_GET)
    {
        $bname="paddington";
        $bprice=84;
        session_start();
        $_SESSION["P"]=$bname."|".$bprice."|"."P";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>paddington</title>
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
 
    <img src="images\story\b15.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> Paddington is talked into sawing off a dangerous branch for Mr. Curry. Mr. Brown's lawnmower looks like a good solid object to which he can attach a rope but before he knows it the mower ends up dangling from the tree. He eventually manages to free it but the mower springs into life, taking Paddington off on a trail of destruction. It takes all Mr. Gruber's diplomacy to rescue Paddington from the consequences.
</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.84</li>

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