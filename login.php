<?php
session_start();
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['name']    = $user['name'];
        $_SESSION['role']    = $user['role'];

        if ($user['role'] == 'admin') {
            header("Location: admin.php");
        } else {
            header("Location: Home.php");
        }
        exit;
    } else {
        $error = "Invalid email or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - JHM Learning Hub</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
       body { font-family: Arial; display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 100vh; background: linear-gradient(135deg, #0d47a1 0%, #1a73e8 40%, #42a5f5 70%, #e3f2fd 100%);
        .box { background: white; padding: 40px; border-radius: 10px; width: 350px; box-shadow: 0 20px 60px rgba(0,0,0,0.25); }
        input { width: 100%; padding: 10px; margin: 8px 0 15px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { width: 100%; padding: 12px; background: #0d47a1; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0d47a1; }
        .error { color: red; margin-bottom: 10px; }
        p { margin-top: 15px; text-align: center; }
        a { color: #0d47a1; }
    </style>
</head>
<body>
    <div style="width:100%; text-align:center; margin-bottom: 50px;">
  <h2 style="font-size:2.2rem; font-weight:800; color:white; letter-spacing:1px;">
    🎓 JHM Learning Hub
  </h2>
  <p style="color:rgba(255,255,255,0.85); font-size:0.95rem; margin-top:5px;">
    Learn for Free. Grow at your own pace.
  </p>
  <div style="width:60px; height:4px; background:rgba(255,255,255,0.7); border-radius:5px; margin:8px auto 0;"></div>
</div>


<div class="box">
    <h2  style="text-align:center;">JHM Learning Hub</h2>
    <p style="margin-bottom:20px; color:gray;">Student Login</p>
    <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="POST">
        <input type="email" name="email" placeholder="you@example.com" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <p>No account yet? <a href="register.php">Register here</a></p>
</div>
</body>
</html>