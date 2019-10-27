<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Assign";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $conn->real_escape_string($_POST['Name']);
$email = $conn->real_escape_string($_POST['Email']);
$date = $conn->real_escape_string($_POST['Date']);
$mobilenumber = $conn->real_escape_string($_POST['MobileNumber']);
$query   = "INSERT into Detail (Name,Email,Dates,PhoneNumber) VALUES('" . $name . "','" . $email . "','" . $date . "','" . $mobilenumber ."')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
if ($success){
    echo "<script type='text/javascript'>alert('Success');</script>";
    exit;

};
?>
