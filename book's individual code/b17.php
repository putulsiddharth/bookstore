<?php
    if($_GET)
    {
        $bname="avengers";
        $bprice=86;
        session_start();
        $_SESSION["A"]=$bname."|".$bprice."|"."A";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>Avengers</title>
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
 
    <img src="images\marvel\b17.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> 
  This revised edition of this superb guide to the characters of Earth's mightiest Super Hero team features updated images and text for many existing characters as well as a further 60 new heroes and villains. As ever, each character is illustrated with original art by Marvel Comics' finest artists, and the text has been updated to take account of new events in the Avengers' world. Including more than 220 classic Marvel characters and a simple and clear A-Z format, Marvel Avengers: The Ultimate Character Guide will appeal to children and adults alike!</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.86</li>

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