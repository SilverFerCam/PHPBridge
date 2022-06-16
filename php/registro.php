<?php
    if(isset($_REQUEST['enviar'])){
        session_start();
        $_SESSION['email'] = $_REQUEST['correo'];
        header("Location: ../bridge.php"); 
        exit;
    }  
?>