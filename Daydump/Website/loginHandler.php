<?php

session_start();
/*
 * Zac Almas
 * 10/18/20
 * This page handles logins
 */

include 'funcs.php';
//Variables
$uname = $_POST["username"];
$pword = $_POST["pword"];

//Validating variables
if ($uname == null or $pword == null){
    echo "Both username and password must be entered. ";
    
}else {
    
    $sql = "SELECT * FROM `siteusers` WHERE `Password` = '$pword' AND `Username` = '$uname'";
    
    if (dbConnect()->connect_error) {
        die("Connection failed: " . dbConnect()->connect_error);
    }
   //Checking login information with the database.
   
    if ($result = mysqli_query(dbConnect(), $sql)) {
        echo "<br>";
       
        if ($row = mysqli_fetch_assoc($result)) {
            
            $_SESSION['username']=$row['Username'];
            $_SESSION['id']=$row['ID'];
            $_SESSION['role'] = $row['Role'];
            echo "Welcome " . $row['Username'] . "! Login Successful." . "<br>";
            
            header("Location: loginSuccess.php");
        }else {
            header("Location: loginPage.php");
            
        }
        
    } else {
        echo " Error: Login unsuccessful: " . $sql . "<br>" . dbConnect()->error;
    }
    
}