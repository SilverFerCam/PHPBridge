<?php
    move_uploaded_file(
        $_FILES['pdf']['tmp_name'], 
        "../uploads/datosCuestionario.pdf"
    );    
?>