<?php    
    $pdf = $_FILES['pdf']['tmp_name'];
    session_start();
    $_SESSION['pdf'] = $pdf;
    unlink("../uploads/DigitalTransformationResults.pdf");
    move_uploaded_file($_FILES['pdf']['tmp_name'],"../uploads/DigitalTransformationResults.pdf");
    header("Location: mail.php");
?>