<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);    

    try {
        session_start();
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
        //Mail del cliente pillado por SESSION
        //$mail->addAddress($_SESSION['email']);
        //$mail->addAddress('aheras@silver-storm.com'); <-- Correo de Alberto

        //move_uploaded_file($_GET['pdf'],"../uploads/DigitalTransformationResults.pdf");
        //echo($_SESSION['pdf']);
        $pdf = "../uploads/DigitalTransformationResults.pdf";

        //Attachments        
        $mail->addAttachment($pdf);        //Optional name
    
        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = 'SilverStorm Digital Transformation Results';
        $mail->Body    = 'Here you have your results:';        
    
        $mail->send();
        echo 'Message has been sent';
        
        /*header("Location: ../index.php");
        exit();*/
    } catch (Exception $e) {        
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>