<?php
    if($_GET)
    {
        $bname="x-man";
        $bprice=87;
        session_start();
        $_SESSION["XM"]=$bname."|".$bprice."|"."XM";
        header("Location: book.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>x-man</title>
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
 
    <img src="images\marvel\b18.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> 
 They debuted in 1963, but weren’t the instant sensations that the Fantastic Four or Spider-Man had been; twenty years later, they were the most exciting (or x-citing!) property in comics. Fans couldn’t get enough of Wolverine! Storm! Cyclops! Beast! Nightcrawler! Jean Grey! Not to mention Professor X, and his nemesis, Magneto! The X-Men brought a level of nuance and storytelling sophistication that hadn’t been seen in mainstream comics, and now, with thousands of comics, and ten feature films to date, the X-Men have cemented their place as one of the greatest super hero teams in history.</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.87</li>

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