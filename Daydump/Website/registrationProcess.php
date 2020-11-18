<?php

/*
 * DayDump
 * Zac Almas
 * 10/18/20
 * This page handles the users registration.
 */

//Allows us to call the function that connects us to the database
include 'funcs.php';

$name = $_GET["name"];
echo "Welcome " . $name . "!" . "</br>";

//Retrieving the variables
$email = $_GET["email"];
$bday = $_GET["birthday"];
$pword = $_GET["password"];
$uname = $_GET["username"];

// Check connection
if (dbConnect()->connect_error) {
    die("Connection failed: " . dbConnect()->connect_error);
}
echo "Connected successfully";

//Insert data into database
$sql = "INSERT INTO siteusers (`ID`, `Name`, `EMail`, `Birthday`, `Password`, `Username`) VALUES (NULL, '$name', '$email', '$bday', '$pword', '$uname')";

//Checking to make sure it made it to the database
if (dbConnect()->query($sql) === TRUE) {
    header("Location: registrationSuccess.php");
} else {
    echo " Error: " . $sql . "<br>" . dbConnect()->error;
}

?>