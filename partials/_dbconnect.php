<?php

//Connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "users2204"; // make sure to select teh right name for database
$table = "users";

$conn = mysqli_connect($servername, $username, $password) or die("Cannot establish a connection to database");

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS {$database};";
$result = mysqli_query($conn, $sql);

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS `{$database}`.`{$table}` (
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(11) NOT NULL,
    `password` VARCHAR(25) NOT NULL,
    `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE (`username`));";

$result = mysqli_query($conn, $sql);
?>