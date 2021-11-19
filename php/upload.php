<?php
    move_uploaded_file(
        $_FILES['pdf']['tmp_name'], 
        $_SERVER['DOCUMENT_ROOT'] . "/phpbridge/uploads/datosCuestionario.pdf"
    );    
?>