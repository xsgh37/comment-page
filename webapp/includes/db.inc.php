<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = ""; // Add your root's password.
$dbName = "webapp";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

/*
CREATE DATABASE `webapp`;
CREATE TABLE `webapp`.`comments` (
  id INT AUTO_INCREMENT PRIMARY KEY,
  comment VARCHAR(240)
);
*/
