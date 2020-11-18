<?php
session_start();

/*
 * DayDump
 * Zac Almas
 * 10/18/20
 * This page is where the functions are stored
 */ 

//alert box function
function alert_box(){
    $message = $_SESSION['errorMessage'];
    echo "<script>alert($message)</script>";
}

//Function that connects to the database
function dbConnect() 
{
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database_name = "regform";
    
    //create a connection
    $conn = new mysqli($host, $username, $password, $database_name);
    
    return $conn;
}

