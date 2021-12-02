<?php
$servername = "localhost";
$username = "jake";
$password = "Ls158kqd";
$dBName = "campusvisit"; 

$conn = mysqli_connect($servername, $username, $password, $dBName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}