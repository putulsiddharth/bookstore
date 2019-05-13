<?php
    if($_GET)
    {
        $bname="the salvation of innocense";
        $bprice=72;
        session_start();
        $_SESSION["TSOI"]=$bname."|".$bprice."|"."TSOI";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>The salvation of innocense</title>
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
 
    <img src="images\novel\bo4.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p>A film adaptation starring Sophie Curtis as Beckett and Kelly Reilly as Pamela was screened at the Austin Film Festival in 2013 and received a limited theatrical release on 5 September, 2014.[8] The movie, which was directed by Hilary Brougher, was poorly received by critics.</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.72</li>

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