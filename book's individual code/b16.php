<?php
    if($_GET)
    {
        $bname="chhota bheem";
        $bprice=85;
        session_start();
        $_SESSION["CB"]=$bname."|".$bprice."|"."CB";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>Chhota bheem</title>
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
 
    <img src="images\story\b16.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> 
   Long ago there was an evil demon, Damyaan. He captured the beautiful, golden city of Sonapurand threw the people out of their own city. He then created his own army of kaal sainik's. In order to be immortal, he confined three spirits in three rings. Thus began his ritual of immortality. But the ritual backfired, and he got cursed and captured in his own kingdom. Only a human with a heart of gold and soul of steel could release Damyaan. In the meantime Skandi, Damyaan's minister, comes to Dholakpur and lures the king with the thought of gold. Bheem and his friends, led by the king and Skandi, go in search of Sonapur.</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.85</li>

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