<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    session_start();

    $al=explode("|",$_SESSION["ad"]);
    $all=explode("|",$_SESSION["all"]);
    $nm=$al[0];
    $ad=$al[1]."/".$al[2]."/".$al[3]."/".$al[4]."/".$al[5];

    echo $_SESSION["mailer"];

for($i=0;$i<count($all)-1;$i++)
    {
        $bk=$all[$i];
        $conn=new mysqli("localhost","root","","bookstore");
        $sql="INSERT INTO `track`(Name,Item,Address) VALUES ('$nm','$bk','$ad')";
        $conn->query($sql);
        
        require 'C:/Users/PUTUL SIDDHARTH/vendor/autoload.php';

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

        //Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'eminentputul@gmail.com';                 // SMTP username
        $mail->Password = 'Siddharth97@';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom("mailer@putul.com", "Mailer");
        $mail->addAddress($_SESSION['mailer'], $nm);     // Add a recipient
        $mail->addAddress('putul.siddharth2017@vitstudent.ac.in');               // Name is optional
    

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Confirmation";
        $mail->Body    = "You have successfully ordered the book ".$bk;

        $mail->send();

        
    }

?>

<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Arvo|ZCOOL+XiaoWei" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Germania+One|ZCOOL+XiaoWei" rel="stylesheet">
    <style>
        body{
            background-image: url("images/5.jpg");
        }
        #corner{
            
            border-radius: 25px;
            background: gray;
            padding: 20px; 
            width: 1000px;
            height: 150px;
            margin:120px;
            font-family: 'ZCOOL XiaoWei', serif;
            font-family: 'Arvo', serif;
            font-size: 40px;
            color:white;
            opacity:0.8;
        }
              #home{
            margin-left:1040px
                
        }
        h1{
            margin-top: 20px;
            color:red;
            font-family: 'ZCOOL XiaoWei', serif;
            font-family: 'Arvo', serif;
            font-family: 'Germania One', cursive;    
        }
    
    </style>
    
</head>
<body>
                        <div id="home">
    <a style="text-decoration:none" href="book's individual code\book.php"><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a style="text-decoration:none" href="index.php"><font color="white">Logout</font></a>
    </div>
    <h1><center>Thanks for shopping with us..</center></h1>
    <p id="corner">Your order is Successfully Placed.  Thanks for placing the order</p>
</body>

</html>