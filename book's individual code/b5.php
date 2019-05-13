<?php
    if($_GET)
    {
        $bname="the indian history";
        $bprice=73;
        session_start();
        $_SESSION["TIH"]=$bname."|".$bprice."|"."TIH";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>The Indian History</title>
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
 
    <img src="images\history\bo5.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p>This book is meant for Civil Services Preliminary and Main Examinations, State Civil Services Examinations and other competitive examinations where History is an important area. In this new edition lot of care has been taken to present History as per the requirements of the latest trends in the Civil Services as well as State Civil Services examination trends. Apart from adding a very elaborate new chapter on “Culture” in the ancient section, special emphasis is given to highlighting socio-religious and cultural developments and concepts throughout the book. Moreover, the subject has been illustrated through more maps, photographs, diagrams, flowcharts to make it easily comprehendible..</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.73</li>

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