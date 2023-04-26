<?php
    $connect = mysqli_connect('localhost', 'root', '', 'LeraDB');

    if (!$connect) {
        die('Error - invalid sql');
    }
?>