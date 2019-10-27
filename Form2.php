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
$name = $conn->real_escape_string($_POST['SubmitName']);
$clubname = $conn->real_escape_string($_POST['SubmitClubName']);
$advisorname = $conn->real_escape_string($_POST['SubmitAdvisorName']);
$email = $conn->real_escape_string($_POST['SubmitEmail']);
$mobile = $conn->real_escape_string($_POST['SubmitMobileNumber']);
$image = addslashes(file_get_contents($FILES['Image']['tmp_name']));
$image_name = addcslashes($_FILES['Image']['name']);
while($row=mysql)
$query   = "INSERT into officialclub (WhoSubmitTwo,ClubNameTwo,AdvisorNameTwo,EmailTwo,MobileNumberTwo,File,ImageName) VALUES('" . $name . "','" . $clubname . "','" . $advisorname . "','" . $email ."','" . $mobile ."','" . $image ."','" . $image_name . "')";
$success = $conn->query($query);


if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
if ($success){
    header("Location: thankyouForm2.html");
    exit;

};
?>
