<?php
    
    $server="localhost";
    
    $username = "root";
    
    $password = "";
    
    $database = "sample";
    
    $port = 3308;

    $con = new mysqli($server,$username,$password,$database,$port);
    if($con->connect_error===true){
        die("Connection Failed".$con->connect_error);
    }
?>