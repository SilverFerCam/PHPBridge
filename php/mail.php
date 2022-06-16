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
        
        //SMTP OUTLOOK
        
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp-mail.outlook.com';                //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'no-reply@silver-storm.com';            //SMTP username
        $mail->Password   = 'Q8rXjS4d3xd5J8v';                      //SMTP password
        $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('no-reply@silver-storm.com');
        $mail->AddBCC('dcambronel@silver-storm.com');
        $mail->AddBCC('ptemino@silver-storm.com');
        $mail->AddBCC('marketing@silver-storm.com');
        
        //Mail del cliente pillado por SESSION
        $mail->AddBCC($_SESSION['email']);    
        
        $pdf = "../uploads/DigitalTransformationResults.pdf";

        //Attachments        
        $mail->addAttachment($pdf);        //Optional name
    
        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = 'SilverStorm Digital Transformation Maturity Quick Scan Results';
        $mail->Body    = '
        <p>Dear SilverStorm enthusiast,</p>

        <p>Nice to e-meet you! Please find attached your detailed competence report. We would be happy to follow up personally with you via "ptemino@silver-storm.com".</p>
        
        <p>Look forward to hearing from you,<br>
        SilverStorm Digital Transformation Team</p>';        
    
        $mail->send();
        echo 'Message has been sent';
        header("Location: ../ending.php");

    } catch (Exception $e) {        
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
?>