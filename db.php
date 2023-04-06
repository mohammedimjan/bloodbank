<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "swbloodbank";

// Create Connection
$conn = mysqli_connect("localhost", "root", "", "swbloodbank");

// Check Connection
if ($conn -> connect_error) {
    die('Could not connect:' . $conn -> connect_error);
}
?>