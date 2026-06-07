<?php
session_start();
include 'config/db.php';

// If not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id   = $_SESSION['user_id'];
$course_id = isset($_GET['course_id']) ? intval($_GET['course_id']) : 1;

// Check already enrolled
$check = $conn->prepare("SELECT id FROM enrollments WHERE user_id=? AND course_id=?");
$check->bind_param("ii", $user_id, $course_id);
$check->execute();
$check->store_result();

if ($check->num_rows == 0) {
    // Save enrollment
    $stmt = $conn->prepare("INSERT INTO enrollments (user_id, course_id) VALUES (?, ?)");
    $stmt->bind_param("ii", $user_id, $course_id);
    $stmt->execute();
}

// Redirect to course page
header("Location: course.php?id=" . $course_id);
exit;
?>