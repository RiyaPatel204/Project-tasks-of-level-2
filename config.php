<?php
$host = "localhost";
$user = "root";
$pass = ""; // default for XAMPP/WAMP
$db   = "auth_demo";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>