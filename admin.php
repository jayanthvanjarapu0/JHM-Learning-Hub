<?php
session_start();
include 'config/db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !='admin'){
    header("Location: login.php");
    exit;
}

$users   = $conn->query("SELECT * FROM users");
$courses = $conn->query("SELECT * FROM courses");
$enrolls = $conn->query("SELECT enrollments.id, users.name, courses.title 
                         FROM enrollments 
                         JOIN users ON enrollments.user_id = users.id 
                         JOIN courses ON enrollments.course_id = courses.id");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - Course by Babu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body { background: #f0f0f0; }
    .navbar-brand { color: #3c4db8 !important; font-weight: bold; }
    .stat-card { background: white; border-radius: 10px; padding: 25px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
    .stat-card h2 { color: #000000; font-size: 48px; font-weight: bold; }
    .stat-card p { color: gray; font-size: 16px; }
    h4 { color: #e07b2a; margin: 30px 0 15px 0; }
    table { background: white; }
  </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">⚙️ ADMIN PANEL</a>
    <a class="nav-link text-white" href="Home.php">← Back to Site</a>
  </div>
</nav>

<div class="container mt-4">

  <!-- Stats Row -->
  <div class="row g-3 mb-2">
    <div class="col-md-4">
      <div class="stat-card">
        <h2><?= $users->num_rows ?></h2>
        <p>👥 Total Users</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="stat-card">
        <h2><?= $courses->num_rows ?></h2>
        <p>📚 Total Courses</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="stat-card">
        <h2><?= $enrolls->num_rows ?></h2>
        <p>✅ Total Enrollments</p>
      </div>
    </div>
  </div>

  <!-- Users Table -->
  <h4>👥 All Users</h4>
  <table class="table table-bordered table-hover rounded">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Joined</th>
      </tr>
    </thead>
    <tbody>
      <?php $users->data_seek(0); while($u = $users->fetch_assoc()): ?>
      <tr>
        <td><?= $u['id'] ?></td>
        <td><?= $u['name'] ?></td>
        <td><?= $u['email'] ?></td>
        <td><?= $u['created_at'] ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

  <!-- Enrollments Table -->
  <h4>📚 All Enrollments</h4>
  <table class="table table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Student Name</th>
        <th>Course Enrolled</th>
      </tr>
    </thead>
    <tbody>
      <?php $enrolls->data_seek(0); while($e = $enrolls->fetch_assoc()): ?>
      <tr>
        <td><?= $e['id'] ?></td>
        <td><?= $e['name'] ?></td>
        <td><?= $e['title'] ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

</div>
</body>
</html>