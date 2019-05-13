<?php
    if($_GET)
    {
        $bname="the outsider";
        $bprice=91;
        session_start();
        $_SESSION["TO"]=$bname."|".$bprice."|"."TO";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>the outsider</title>
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
 
    <img src="images\thriller\b22.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p> 
In The Outsider by Stephen King, Detective Ralph Anderson was stumped when physical evidence placed a suspect for the brutal murder of a child in two different places at one time. Taught to follow the physical evidence, Ralph encountered amateur detective Holly Gibney who showed him that sometimes the supernatural does impact the natural world. The unlikely pair use the fable of El Cuco, a Mexican ghost or monster, to keep the creature from killing again..</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.91</li>

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