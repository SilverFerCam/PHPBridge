<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    $pdf = getenv('HOMEDRIVE').getenv('HOMEPATH').'\Downloads\DatosCuestionario.pdf';

    echo($pdf);

    try {
        //Server settings        
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'silverfercam.info@gmail.com';          //SMTP username
        $mail->Password   = '!tfq3+GtMq*.M6:T';                     //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('silverfercam.info@gmail.com', 'David Fernandez');
        $mail->addAddress('davidfercam69@gmail.com');               //Add a recipient        
    
        //Attachments        
        $mail->addAttachment($pdf);         //Optional name
    
        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>