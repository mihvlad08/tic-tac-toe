<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "tic_tac_toe";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)) {
    die("Failed to connect to database!!!!!! Try again.");
};


