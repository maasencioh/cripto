<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("location: login.php?error='Not logged in transferir.php'");
    }
    else {
        $myfile = fopen("transferencias.txt", "a");
        $message = $_SESSION['username'].": ".$_POST['transfer']."\n";
        echo $message;
        fwrite($myfile, $message);
        fclose($myfile);
    }
?>
