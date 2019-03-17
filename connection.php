<?php 
    $server_name ='localhost';
    $username = 'root';
    $database_name ='assignment';

    $connection = new mysqli($server_name,$username);

    if($connection->connect_error){
        die('connection failed with the database ');
    }
?>