<?php
$servername = "localhost";
$username = "web_project";
$password = "password123";
$dBName = "campusvisit"; 

$conn = mysqli_connect($servername, $username, $password, $dBName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}