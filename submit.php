<!DOCTYPE html>
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
if ($data["tim"] == "12AM") {
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
    <body>

<!-- ems success message here here. you better include the crack parrot 0_0 -->

Success!

<img src="img/parrot.gif">

<!-- 
The php vars can be wrapped in normal html tags like so.
just be sure to keep the <?php echo $blah?> part.
I'll let you clean it up :)
-->

<?php #var_dump($data)?>

<h1> <?php echo $header?> </h2>
<h3> <?php echo $date?> </h3>


<h3> <?php echo $times[0]?> </h3>
<h4> Todd Dining Hall tour & Lunch </h4>

<h3> <?php echo $times[1]?> </h3>
<h4> <?php echo $major?> Meeting </h4>

<h3> <?php echo $times[2]?> </h3>
<h4> Dorm Room Tours </h4>

<h3> <?php echo $times[3]?> </h3>
<h4> <?php echo $interest?> Meeting </h4>

    </body>
</html>