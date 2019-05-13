<?php

    session_start();
    $_SESSION['TBOG']="no";
    $_SESSION['HP']="no";
    $_SESSION['EITN']="no";
    $_SESSION['TSOI']="no";
    $_SESSION['TIH']="no";
    $_SESSION['TCW']="no";
    $_SESSION['TFIH']="no";
    $_SESSION['IMH']="no";
    $_SESSION['WG']="no";
    $_SESSION['HG']="no";
    $_SESSION['LG']="no";
    $_SESSION['IG']="no";
    $_SESSION['RH']="no";
    $_SESSION['I2']="no";
    $_SESSION['P']="no";
    $_SESSION['CB']="no";
    $_SESSION['A']="no";
    $_SESSION['XM']="no";
    $_SESSION['CM']="no";
    $_SESSION['CA']="no";
    $_SESSION['M']="no";
    $_SESSION['TO']="no";
    $_SESSION['BL']="no";
    $_SESSION['TGD']="no";
        

      if($_POST)
      {
          if(isset($_POST["fnm"])) #register
          {
              if(isset($_POST['lnm']) and isset($_POST['em']) and isset($_POST['pw']) and isset($_POST['cpw']))
                 {
                          $fm=$_POST["fnm"];
                          $lm=$_POST["lnm"];
                          $em=$_POST["em"];
                          $pw=$_POST["pw"];
                          $cpw=$_POST["cpw"];
                          $gd=$_POST["im"];


                          if($pw!=$cpw)
                          {
                              echo "<script>alert('Passwords dont match');</script>";
                          }
                          else
                          {

                                  if(preg_match("/^[a-zA-Z]+$/",$fm) and preg_match("/^[a-zA-Z]+$/",$lm))
                                  {
                                      echo "<script>alert('Succesfully registered')</script>";
                                      $conn= new mysqli("localhost","root","","bookstore");
                                      $sql="INSERT INTO `login` (fname,lname,email,pass,gender) VALUES ('$fm','$lm','$em','$pw','$gd')";
                                      $conn->query($sql);
                                  }
                                  else
                                  {
                                      echo "<script>alert('Invalid Name Format')</script>";
                                  }

                          }
                 }
                 
                 else
                 {
                     echo "<script>alert('Some fields are empty')</script>";
                 }
                
            }
    else #login
          {
            $conn= new mysqli("localhost","root","","bookstore");
            if(isset($_POST['em']) and isset($_POST['pw']))
            {
                $_SESSION["mailer"]=$_POST['em'];
                $em=$_POST['em'];
                $pw=$_POST['pw'];
                $sql="SELECT * FROM `login` where email='$em' and pass='$pw'";
                $res=$conn->query($sql);
                if($res->num_rows>0)
                {
                    header("Location: book's individual code/book.php");
                }
                else
                {
                   echo "<script>alert('Invalid i/p')</script>"; 
                }
            }
            else
            {
                echo "<script>alert('Some fields are empty')</script>";
            }
            
              
          }
      }
      

?>


<html>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    <style>
        body{
            background-image: url(images/6.jpg);
        }
        
        #about{
            position:absolute;
            margin-left: 200px;
            color:white;
            
        }

        #contact{
            position:absolute;
            left: 260px;
            float:left;
            color:white;
        }
        #logo{
            position:absolute;
            top:5px;
            left:5px;
        }
      
        #topp{
            position: absolute;
            top:0;
        }
        
        #tab1{
            background-color: aqua;
        }
        
        
        #tab2{
            background-color: aqua;
        }
        
        
        #go{
            padding-left: 850px;
            position: absolute;
            top:130px;
            height:1340px;
            width:1340px;
        }
        * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}




.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 3s;
}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
        
        #myslide{
            margin: 70;
            margin-top: 100;
        }
    </style>
    
</head>
<body>
    
    <div id="topp">
    <img src="images\sliders\logo2.png" id="logo" width="90" height="60">
    <p id="about"><a style="text-decoration:none;color:white;" href="accordian.php">About&nbsp;</a>|</p>
    <p id="contact"><a style="text-decoration:none" href="contact.php">Contact&nbsp;Us</a></p>
    </div>
    
    
    <div class="slideshow-container" id="myslide">

<div class="mySlides fade">
  <img src="images\sliders\b1.jpg" style="width:60%">
</div>

<div class="mySlides fade">
  <img src="images\sliders\b2.jpg" style="width:60%">
</div>

<div class="mySlides fade">
  <img src="images\sliders\b4.jpg" style="width:60%">
</div>
        
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

    
    <div id="go">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Login</a></li>
                <li><a href="#tabs-2">Register</a></li>
            </ul>
	   <div id="tabs-1"><form method="POST">
            Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" placeholder="demo@gmail.com" name="em"><br><br>
            Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="test123" name="pw"><br><br>
            <a style="text-decoration:none" href="contact.php">Forgot Password?</a><br><br>
            <pre>                 <input type="submit" value="Login"></pre>
    
        </form></div>
	<div id="tabs-2"><form method="POST">
    
        First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Mahendra" name="fnm"><br><br>
        last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Dhoni" name="lnm"><br><br>
        Your Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" placeholder="demo@gmail.com" name="em"><br><br>
        Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="test123" name="pw"><br><br>
        Confirm Password:&nbsp;<input type="password" placeholder="test123" name="cpw"><br><br>
        I am: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="im">
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
            </select><br><br>
        <pre>            <input type="submit" value="Sign Up"></pre>
    </form></div>
        </div>
    </div>
    
    <script>
    var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
        $( function() {
            $( "#tabs" ).tabs();
          } );
        
    </script>
    
</body>

</html>