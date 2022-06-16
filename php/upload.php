<?php    
    if(!empty($_POST['data'])){        
        $data = base64_decode($_POST['data']);        
        file_put_contents( "../uploads/DigitalTransformationResults.pdf", $data );        
    } else {
        echo "No Data Sent";
    }
    exit();     
?>