<?php
ob_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="devcon"; // Database name
$tbl_name="password"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
//echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
//echo "Connected to Database<br />";
// Check $username and $password

if(empty($_POST['username'])){
   echo "<script type='text/javascript'>alert('User Name is Empty')</script>";;
   return false;
}
if(empty($_POST['password']))
{
   echo "<script type='text/javascript'>alert('Password is Empty!')</script>";;
   return false;
}

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE UserName='$username' and Password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$newURL = "http://localhost/kiaqkiaq/webdev/AdminPanel.php";
$backURL = "http://localhost/kiaqkiaq/webdev/Password.html";
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
   echo "Success! $count";
   header('Location: '.$newURL);
} else {
   echo "<script type='text/javascript'>alert('Wrong User Name or Password!')</script>";;
}

ob_end_flush();
?>
