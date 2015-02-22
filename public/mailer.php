<?php

    require_once("/project/PHPMailer/class.phpmailer.php");
    require_once("/project/PHPMailer/class.smtp.php");
    
    $rows = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
    $row = $rows[0];
    $email = $row["email"];
    
    // instantiate mailer
    $mail = new PHPMailer();

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host       = "mail.gmail.com"; // SMTP server
    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "aap.roots@gmail.com";  // GMAIL username
    $mail->Password   = "Mugnaio89";  

    // set From:
    $mail->SetFrom("aap.roots@gmail.com");

    // set To:
    $mail->AddAddress($email);

    // set Subject:
    $mail->Subject = "AAP-roots";

    // set body
    $mail->Body = "Hello,
    Thank you for choosing AAP-roots. 
    To keep using it, please go to http://crockol.bitnamiapp.com/project/public/login.php
    Best regards, 
    the AAP-roots team";
    
    // send mail
    if ($mail->Send() === false)
        die($mail->ErrorInfo . "\n");
    
?>
