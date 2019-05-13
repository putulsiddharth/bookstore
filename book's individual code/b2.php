<?php
    if($_GET)
    {
        $bname="harry potter";
        $bprice=101;
        session_start();
        $_SESSION["HP"]=$bname."|".$bprice."|"."HP";
        header("Location: book.php");
    }
?>

<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>Harry Potter</title>
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
 
    <img src="images\novel\bo2.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p>Harry Potter and the Sorcerer's Stone is the first book in a seven-part series about the powerful young wizard Harry Potter. In this book, he's orphaned and sent to live with his aunt and uncle. Years later, he receives an acceptance letter from Hogwarts School of Witchcraft and Wizardry, where he will have many dangerous and fantastic adventures.</p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.101</li>

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