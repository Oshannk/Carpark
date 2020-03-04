<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "carpark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
session_start(); // Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql = $conn->query("SELECT username , password FROM users WHERE username = '$user_check' ");
//$row = mysql_fetch_assoc($sql);
$row = $sql->fetch_assoc();
$login_session = $row['username'];
echo $login_session;
if (!isset($login_session)) {
    mysqli_close($conn); // Closing Connection
    header('Location: login.php'); // Redirecting To Home Page
}
