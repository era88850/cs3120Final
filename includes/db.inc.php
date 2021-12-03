<?php
$servername = "localhost";
$username = "eralum";
$password = "N6a7i8v8a8r5a";
$dBName = "campusvisit"; 

$conn = mysqli_connect($servername, $username, $password, $dBName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}