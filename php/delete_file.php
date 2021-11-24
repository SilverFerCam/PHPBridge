<?php
    chmod($_GET['file'], 0777);
    unlink($_GET['file']);
?>