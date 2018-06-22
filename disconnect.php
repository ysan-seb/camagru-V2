<?php
    session_start ();
    $_SESSION['authenticated'] = false;
    session_unset ();
    session_destroy ();
    header('Location: index.php');    
    exit();
?>