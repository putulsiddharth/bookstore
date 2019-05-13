<?php

    
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

    if($_GET)
    {
        $nm=$_GET['nm'];
        $em=$_GET['em'];
        $sb=$_GET['sb'];
        $msg=$_GET['msg'];
        
        
        
        
        

//Load Composer's autoloader
require 'C:/Users/PUTUL SIDDHARTH/vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'eminentputul@gmail.com';                 // SMTP username
    $mail->Password = 'Siddharth97@';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($em, $nm);
    $mail->addAddress('putul.siddharth2017@vitstudent.ac.in', 'Putul Sid');     // Add a recipient
    $mail->addAddress('putul.siddharth2017@vitstudent.ac.in');               // Name is optional
    $mail->addReplyTo($em, $nm);

    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $sb;
    $mail->Body    = $msg;
    
    $mail->send();
        header("Location: contact.php");
    }



?>


<html>
<head>   
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Nova+Flat" rel="stylesheet">
    <style>
        body{
            background-image: url(images/5.jpg);
            color:white;
        }
        
        #contactpage{
            color: yellow;
            font-weight: bolder;
            font-size: 40px;
        }
        #bc
        {
            font-family: 'Lobster', cursive;
        }
        #contactp{
            color:white;
            font-size: 20px;
            font-family: 'Lobster', cursive;
            font-family: 'Nova Flat', cursive;
        }
    </style>
</head>
<body>
    
    <div id="contactpage"><pre id="bc">                                                            CONTACT US</pre></div>
    <center><p id="contactp">Email us with any question or queries or call 9801253677.<br>We would be happy to answer your questions and hopefully set up a meeting with you.</p></center>
    
    
    
    <form method="get">
        <fieldset>
            <legend>Name:</legend><input type="text" name="nm" required>
        </fieldset>
            <br><br>
        <fieldset>
            <legend>Email:</legend><input type="email" name="em" required>
        </fieldset>
        <br><br>
        <fieldset>
            <legend>Subject:</legend><input type="text" name="sb" required>
        </fieldset>
            <br><br>
        <fieldset>
            <legend>Message:</legend><textarea name="msg" rows="4" cols="50"></textarea>
        </fieldset>
            <br><br>
        <input type="submit" value="send email">
    </form>
    
</body>

</html>