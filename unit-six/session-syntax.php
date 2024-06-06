<?php
//Before using a session variable always start or else session 
//will not be initialized
session_start(); //start new or existing session

//Storing data or value in a session variable
$_SESSION['name'] = "Dimebag Darrell";

//Accessing data or value stored in session
echo $_SESSION['name'] . "<br>";

//Updating Session data
$_SESSION['name'] = "Phil Anselmo";
echo $_SESSION['name'] . "<br>";

//Deleting a session value
unset($_SESSION['name']);
echo $_SESSION['name'] . "<br>";

//Destroying a session value
session_destroy(); //destroys all data registered to a session