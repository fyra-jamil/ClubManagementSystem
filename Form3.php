<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "devcon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $conn->real_escape_string($_POST['Name']);
$clubname = $conn->real_escape_string($_POST['ClubName']);
$email = $conn->real_escape_string($_POST['Email']);
$mobile = $conn->real_escape_string($_POST['MobileNumber']);
$query   = "INSERT into updateclub (WhoSubmitThree,OfficialClubName,EmailThree,MobileNumberThree) VALUES('" . $name . "','" . $clubname . "','" .  $email ."','" . $mobile . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
if ($success){
    header("Location: thankyouForm3.html");
    exit;

};
?>
