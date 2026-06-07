<?php
session_start();
header('Content-Type: application/json');

$is_admin = isset($_SESSION['user_id']) && $_SESSION['user_id'] == 6;
echo json_encode(['is_admin' => $is_admin]);
?>