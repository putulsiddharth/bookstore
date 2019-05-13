<?php
    if($_GET)
    {
        $bname="captain marvel";
        $bprice=88;
        session_start();
        $_SESSION["CM"]=$bname."|".$bprice."|"."CM";
        header("Location: book.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>captain marvel</title>
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
 
    <img src="images\marvel\b19.jpg" width="300" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> 
 Captain Marvel is the name of several fictional superheroes appearing in American comic books published by Marvel Comics. Most of these versions exist in Marvel's main shared universe, known as the Marvel Universe.</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.88</li>

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