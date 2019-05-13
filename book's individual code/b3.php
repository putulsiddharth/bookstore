<?php
    if($_GET)
    {
        $bname="emma in the night";
        $bprice=70;
        session_start();
        $_SESSION["EITN"]=$bname."|".$bprice."|"."EITN";
        header("Location: book.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
 
     <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    
  <title>Emma in the night</title>
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
 
    <img src="images\novel\bo3.jpg" width="300" height="300"><br><br><br><br><br>
    
<div id="accordion">
  <h3>About the Book</h3>
  <div>
    <p>From the bestselling author of All Is Not Forgotten comes a thriller about two missing sisters, a twisted family, and what happens when one girl comes back...
One night three years ago, the Tanner sisters disappeared: fifteen-year-old Cass and seventeen-year-old Emma. Three years later, Cass returns, without her sister Emma. Her story is one of kidnapping and betrayal, of a mysterious island where the two were held. But to forensic psychiatrist Dr. Abby Winter, something doesn't add up. Looking deep within this dysfunctional family Dr. Winter uncovers a life where boundaries were violated and a narcissistic parent held sway. And where one sister's return might just be the beginning of the crime. </p>
     
  </div>
  <h3>Price</h3>
  <div>
    <ul>
      <li>Rs.70</li>

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