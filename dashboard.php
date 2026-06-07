<?php
session_start();
include 'config/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Get enrolled courses
$stmt = $conn->prepare("
    SELECT courses.title, courses.description, enrollments.course_id 
    FROM enrollments 
    JOIN courses ON enrollments.course_id = courses.id 
    WHERE enrollments.user_id = ?
");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$enrolled = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - Course by Babu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body { background: #f0f0f0; }
    .navbar-brand { color: #0d47a1 !important; font-weight: bold; }
    .welcome-box { background: #0d47a1; color: white; padding: 30px; border-radius: 10px; margin-top: 30px; }
    .course-card { background: white; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
    .btn-watch { background: #0d47a1; color: white; border: none; }
    .btn-watch:hover { background: #0d47a1; color: white; }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

  <!-- Welcome Box -->
  <div class="welcome-box mt-4">
    <h3>Welcome, <?= $_SESSION['name'] ?>! 👋</h3>
    <p>Here are your enrolled courses.</p>
  </div>

  <!-- Enrolled Courses -->
  <h4 class="mt-4 mb-3">My Courses</h4>

  <?php if ($enrolled->num_rows > 0): ?>
    <div class="row">
      <?php while($course = $enrolled->fetch_assoc()): ?>
        <div class="col-md-4">
          <div class="course-card">
            <h5><?= $course['title'] ?></h5>
            <p style="color:gray;"><?= $course['description'] ?></p>
            <a href="course.php?id=<?= $course['course_id'] ?>" 
               class="btn btn-watch">Continue Learning →</a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <div class="text-center mt-4">
      <p>You have not enrolled in any course yet.</p>
      <a href="index.php#courses" class="btn btn-watch">Browse Courses</a>
    </div>
  <?php endif; ?>

</div>

</body>
</html>