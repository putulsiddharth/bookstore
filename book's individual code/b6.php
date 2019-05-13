<?php
    if($_GET)
    {
        $bname="the cold war";
        $bprice=74;
        session_start();
        $_SESSION["TCW"]=$bname."|".$bprice."|"."TCW";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>The cold war</title>
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
 
    <img src="images\history\bo6.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p>We tend to think of the Cold War as a bounded conflict: a clash of two superpowers, the United States and the Soviet Union, born out of the ashes of World War II and coming to a dramatic end with the collapse of the Soviet Union. But in this major new work, Bancroft Prize-winning scholar Odd Arne Westad argues that the Cold War must be understood as a global ideological confrontation, with early roots in the Industrial Revolution and ongoing repercussions around the world.</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.74</li>

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