<?php
    session_start();    

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);   
    
    $email = $_REQUEST['email'];
    $_SESSION['email'] = $email;


    $contact = $_REQUEST['check'];
    echo($contact);
    if($contact=="on"){
        $contact = "Yes";
    }else{
        $contact = "No";
    }

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
        $mail->CharSet = 'UTF-8';                                   // Use UTF-8

        //Recipients
        $mail->setFrom('no-reply@silver-storm.com');
        $mail->AddBCC('dcambronel@silver-storm.com');           //Add a recipient     
        $mail->AddBCC('ptemino@silver-storm.com');           //Add a recipient     
        $mail->AddBCC('marketing@silver-storm.com'); 

        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = 'Form Data';
        $mail->Body    = '<h2>Here you have your data:</h2>                            
                            <h4>Name: '.$_REQUEST['firstname'].'</h4><h4>Email: '.$_REQUEST['email'].'</h4>
                            <h4>Job: '.$_REQUEST['job'].'</h4><h4>Company: '.$_REQUEST['company'].'</h4>
                            <h4>Country: '.$_REQUEST['country'].'<h4>Phone Number: '.$_REQUEST['phone'].
                            '</h4><h4>The client wants to be contacted: '.$contact.'</h4><h4>Data sent by Digital Transformation Maturity Quick Scan</h4>';            
        $mail->send();
        echo 'Message has been sent';
        header("Location: ../bridge.php");

    } catch (Exception $e) {        
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>