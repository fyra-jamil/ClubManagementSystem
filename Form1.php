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
$name = $conn->real_escape_string($_POST['IntentName']);
$clubname = $conn->real_escape_string($_POST['IntentClubName']);
$advisorname = $conn->real_escape_string($_POST['IntentAdvisorName']);
$email = $conn->real_escape_string($_POST['IntentEmail']);
$mobile = $conn->real_escape_string($_POST['IntentMobileNumber']);
$query   = "INSERT into noticeintention (WhoSubmitOne,ProposedClubNameOne,ProposedAdvisorOne,Email,MobileNumberOne) VALUES('" . $name . "','" . $clubname . "','" . $advisorname . "','" . $email ."','" . $mobile . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
if ($success){
    header("Location: thankyouForm1.html");
    exit;

};
?>
