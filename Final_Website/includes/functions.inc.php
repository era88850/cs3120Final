<?php
function emptyInputSignup($fName, $lName, $email, $phone){
    $result;
    if (empty($fName) || empty($lName) || empty($email) || empty($phone)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function registerUser($conn, $fName, $lName, $email, $phone, $address1, $address2, $city, $state, $zip, $country, $interests, $hsName,
$gradYear, $hsAddress, $hsCity, $hsState, $hsZip, $country2, $semester, $visit, $time, $clubs){
    $sql = "INSERT INTO students (fName, lName, email, phone, add1, add2, city, stat, zip, country, inter, hsName, grad, hsadd, hscity, hsstate, 
    hszip, count2, semes, visit, tim, clubs) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Campus_Visit.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssss", $fName, $lName, $email, $phone, $address1, $address2, $city, $state, $zip, $country, $interests, $hsName,
    $gradYear, $hsAddress, $hsCity, $hsState, $hsZip, $country2, $semester, $visit, $time, $clubs);
    
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);

    header("location: ../Campus_Visit.php?error=none");
    exit();
}