<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
  <a class="navbar-brand text-white fw-bold" href="index.php">
    <img src="JHM logo.jpeg" alt="JHM Logo" style="height:35px; width:35px; object-fit:contain; margin-right:8px; border-radius:50%;">
   JHM Learning Hub
 </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      
      <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="index.php">Courses</a></li>
      <?php if (isset($_SESSION['user_id'])): ?>
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
          <li class="nav-item"><a class="nav-link" href="admin.php">Admin Panel</a></li>
        <?php endif; ?>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      <?php else: ?>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>