<?php

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
                $em=$_POST['em'];
                $pw=$_POST['pw'];
                $sql="SELECT * FROM `login` where email='$em' and pass='$pw'";
                $res=$conn->query($sql);
                if($res->num_rows>0)
                {
                    echo "<script>alert('Sucessfully Logged In')</script>";
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
    
    <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    
    <style>
        body{
            background-color: #A29F92;
        }
        
        #about{
            position:absolute;
            margin-left: 200px;
            float:left;
            color:white;
        }

        #contact{
            position:absolute;
            margin-left: 260px;
            float:left;
            color:white;
        }
        #logo{
            position:absolute;
        }
        .mySlides
        {
            display:none;
        }
        
        #slide{
        height:700px;
        width:700px;
        padding-left: 10px;
        padding-top: 70px;
        }
        
        #topp{
            height: 50;        
            background-color: #3B5997;
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
    </style>
    
</head>
<body>
    
    <div id="topp">
    <img src="images\sliders\logo.png" id="logo" width="120" height="50">
    <p id="about"><a href="accordian.html">About&nbsp;</a>|</p>
    <p id="contact"><a href="contact.php">Contact Us</a></p>
    </div>
    
    
    <div id="slide">
        <div class="w3-content w3-display-container">
        
            <img class="mySlides" src="images\sliders\b1.jpg" style="width:100%">
            <img class="mySlides" src="images\sliders\b2.jpg" style="width:100%">
            <img class="mySlides" src="images\sliders\b3.jpg" style="width:100%">
            <img class="mySlides" src="images\sliders\b4.jpg" style="width:100%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        
        </div>
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
            <a href="">Forgot Password?</a><br><br>
            <pre>                 <input type="submit" value="Login" ></pre>
    
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
        
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
        
        $( function() {
            $( "#tabs" ).tabs();
          } );
        
    </script>
    
</body>

</html>