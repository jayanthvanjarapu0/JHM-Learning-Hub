<?php
$conn = new mysqli("localhost", "root", "", "coursebybabu");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>