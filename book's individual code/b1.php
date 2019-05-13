<?php
    if($_GET)
    {
        $bname="the book of god";
        $bprice=102;
        session_start();
        $_SESSION["TBOG"]=$bname."|".$bprice."|"."TBOG";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>The Book Of God</title>
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
 
    <img src="images\novel\bo1.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p>The Book of God reads like a novel, dramatizing the sweep of biblical events, bringing to life the men and women of this ancient book in vivid detail and dialogue. From Abraham wandering in the desert to Jesus teaching the multitudes on a Judean hillside, this award-winning bestseller follows the biblical story in chronological order. Priests and kings, apostles and prophets, common folk and charismatic leaders—individual stories offer glimpses into an unfolding revelation that reaches across the centuries to touch us today</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.102</li>

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