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
$email = $conn->real_escape_string($_POST['Email']);
$mobile = $conn->real_escape_string($_POST['MobileNumber']);
$studentid = $conn->real_escape_string($_POST['StudentID']);
$clubname = $conn->real_escape_string($_POST['ClubName']);
$activitydate = $conn->real_escape_string($_POST['ActivityDate']);
$detail = $conn->real_escape_string($_POST['Detail']);
$nameactivity = $conn->real_escape_string($_POST['NameActivity']);
$location = $conn->real_escape_string($_POST['Location']);
$address = $conn->real_escape_string($_POST['Address']);
$timego = $conn->real_escape_string($_POST['TimeGo']);
$timeback = $conn->real_escape_string($_POST['TimeBack']);
$query   = "INSERT into transport (NamePerson,EmailAddress,MobileNumber,StudentID,ClubName,ActivityDate,Details,NameActivity,Location,Address,TimeGo,TimeBack)
VALUES('" . $name . "','" .  $email ."','" . $mobile . "','" . $studentid. "','" . $clubname . "','" . $activitydate . "','" . $detail . "','" . $nameactivity . "','" . $location .
"','" . $address . "','" . $timego . "','" . $timeback . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
if ($success){
    header("Location: thankyoutransport.html");
    exit;

};
?>
