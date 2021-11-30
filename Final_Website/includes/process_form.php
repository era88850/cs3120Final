<?php
if(isset($_POST["submit2"])){
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $country = $_POST["country"];
    $interests = $_POST["interests2"];
    $hsName = $_POST["hsName"];
    $gradYear = $_POST["gradYear"];
    $hsAddress = $_POST["hsaddress"];
    $hsCity = $_POST["hscity"];
    $hsState = $_POST["hsstate"];
    $hsZip = $_POST["hszip"];
    $country2 = $_POST["country2"];
    $semester = $_POST["semester"];
    $visit = $_POST["visit-date"];
    $time = $_POST["time1"];
    $clubs = $_POST["foo"];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($fName, $lName, $email, $phone) !== false){
        header("location: ../Campus_Visit.php?error=emptyinput");
        exit();
    }

    registerUser($conn, $fName, $lName, $email, $phone, $address1, $address2, $city, $state, $zip, $country, $interests, $hsName,
    $gradYear, $hsAddress, $hsCity, $hsState, $hsZip, $country2, $semester, $visit, $time, $clubs);
}
else {
    header("location: ../Campus_Visit.php");
    exit();
}