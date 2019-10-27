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
$totalbudget = $conn->real_escape_string($_POST['TotalBudget']);
$ownbudget = $conn->real_escape_string($_POST['OwnBudget']);
$unimybudget = $conn->real_escape_string($_POST['UnimyBudget']);
$detailbudget = $conn->real_escape_string($_POST['DetailBudget']);
$query   = "INSERT into proposeactivity (NamePerson,EmailAddress,MobileNumber,StudentID,ClubName,ActivityDate,Details,NameActivity,TotalBudget,OwnBudget,UnimyBudget,DetailsBudget)
VALUES('" . $name . "','" .  $email ."','" . $mobile . "','" . $studentid. "','" . $clubname . "','" . $activitydate . "','" . $detail . "','" . $nameactivity . "','" . $totalbudget .
"','" . $ownbudget . "','" . $unimybudget . "','" . $detailbudget ."')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
if ($success){
    header("Location: thankyoupropose.html");
    exit;

};
?>
