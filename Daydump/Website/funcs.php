<?php

//This page is where the functions are stored 

//alert box function
function alert_box($message){
    echo "<script>alert($message)</script>";
}

//Function that connects to the database
function dbConnect() 
{
    $host = "127.0.0.1:50667";
    $username = "azure";
    $password = "6#vWHD_$";
    $database_name = "regform";
    
    //create a connection
    $conn = new mysqli($host, $username, $password, $database_name);
    
    return $conn;
}

