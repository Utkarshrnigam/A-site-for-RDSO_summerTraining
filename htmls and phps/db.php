<?php


$connection = mysqli_connect('localhost:3308', 'root', '', 'rdso');
    
    if(!$connection)
    {
        die("database connection failed");
    }
    
?>