<?php
    if($_GET)
    {
        $bname="world geography";
        $bprice=77;
        session_start();
        $_SESSION["WG"]=$bname."|".$bprice."|"."WG";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>world geography</title>
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
 
    <img src="images\geography\bo9.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> Reinforce critical concepts from the text and help students improve their reading-for-information skills with this essential resource, written 2-3 grade levels below the Student Edition
</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.77</li>

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