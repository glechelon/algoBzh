<?php
    session_start();    

    session_destroy();
    unset($_SESSION);

    header("location: ../pages/index.php");

?>


