<?php
    if($_GET)
    {
        $bname="the future is history";
        $bprice=75;
        session_start();
        $_SESSION["TFIH"]=$bname."|".$bprice."|"."TFIH";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>The future is history</title>
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
 
    <img src="images\history\bo7.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> In The Future Is History, Gessen follows the lives of four people born at what promised to be the dawn of democracy. Each of them came of age with unprecedented expectations, some as the children and grandchildren of the very architects of the new Russia, each with newfound aspirations of their own--as entrepreneurs, activists, thinkers, and writers, sexual and social beings. 
</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.75</li>

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