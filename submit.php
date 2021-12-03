<!DOCTYPE html>
</head>
<?php

require_once 'includes/db.inc.php';
require_once 'includes/functions.inc.php';

$data = generateData($conn);
mysqli_close($conn);


##########VARS FOR YOU TO PLAY WITH (Feel free to modify, my english might be poor its 1 am)

$header = sprintf("Schedule for %s %s: ", $data["fName"], $data["lName"]);
$date = sprintf("Date: %s", $data["visit"]);

$times = array();
$major = "";
$interest = "";

########## END VARS


#Adds time slots to the array
if ($data["tim"] == "12PM") {
    array_push($times, "12 PM - 1 PM");
    array_push($times, "1 PM - 2 PM");
    array_push($times, "2 PM - 3 PM");
    array_push($times, "3 PM - 4 PM");

} elseif ($data["tim"] == "10AM") {
    array_push($times, "10 AM - 11 AM");
    array_push($times, "11 AM - 12 PM");
    array_push($times, "1 PM - 2 PM");
    array_push($times, "2 PM - 3 PM");



} else {
    array_push($times, "2 PM - 3 PM");
    array_push($times, "3 PM - 4 PM");
    array_push($times, "4 PM - 5 PM");
    array_push($times, "5 PM - 6 PM");
}


# Adds the major to the array
if ($data["inter"] == "compsci") {
    $major = "Computer Science";

} else if ($data["inter"] == "engineer") {
    $major = "Engineering";

} else {
    $major = "Music";  
}

# Adds interest to the array 
if ($data["clubs"] == "StOrg") {
    $interest = "Student Organizations";

} else if ($data["clubs"] == "Sports") {
    $interest = "Intramural/Sports Clubs";

} else if ($data["clubs"] == "Greek") {
    $interest = "Greek Life";

} else if ($data["clubs"] == "Abroad") {
    $interest = "Study Abroad";

} else if ($data["clubs"] == "Lead") {
    $interest = "Student Leadership";

} else {
    $interest = "Athletics";  
}


?> 
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Complete</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link href="http://localhost/CS3120Final/material-kit-master/assets/css/material-kit.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="css/diffstyles.css">
    </head>
    <body>

        <!-- ems success message here here. you better include the crack parrot 0_0 -->
        <div class="urWelcomeJake">
            <img src="img/parrot.gif" height=75>
        </div>
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                    <h1 class="submit-text">Thank you for Registering!</h1>
                    <p class="submit-text">
                        Thank you for registering for a campus visit at the University of Central 
                        Missouri. Below is your schedule. Please save it for reference on your visit!
                    </p>
                </div>
            </div>
        </div>
        <!-- 
        The php vars can be wrapped in normal html tags like so.
        just be sure to keep the <?php echo $blah?> part.
        I'll let you clean it up :)
        -->

        <?php #var_dump($data)?>

        <h2 class="submit-text"> <?php echo $header?> </h2>
        <h3 class="submit-text"> <?php echo $date?> </h3>


        <h4 class="submit-text"> <?php echo $times[0]?> </h4>
        <h5 class="submit-text"> Todd Dining Hall tour & Lunch </h5>

        <h4 class="submit-text"> <?php echo $times[1]?> </h4>
        <h5 class="submit-text"> <?php echo $major?> Meeting </h5>

        <h4 class="submit-text"> <?php echo $times[2]?> </h4>
        <h5 class="submit-text"> Dorm Room Tours </h5>

        <h4 class="submit-text"> <?php echo $times[3]?> </h4>
        <h5 class="submit-text"> <?php echo $interest?> Meeting </h5>

    </body>
</html>