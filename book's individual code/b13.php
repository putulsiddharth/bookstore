<?php
    if($_GET)
    {
        $bname="robin hood";
        $bprice=82;
        session_start();
        $_SESSION["RH"]=$bname."|".$bprice."|"."RH";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>Robin Hood</title>
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
 
    <img src="images\story\b13.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> Robin Hood’s career as an outlaw begins when he is on his way to a shooting match in Nottingham. Some of the king’s foresters meet him in Sherwood Forest and mock his youth. One of the foresters wagers that Robin cannot slay a deer, so Robin kills one to win the bet. The penalty for killing one of the king’s stags, however, is death. The foresters give chase, and Robin is forced to hide in the forest. There he meets other landless, hunted men and becomes their leader.


</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.82</li>

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