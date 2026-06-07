<?php
session_start();
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        $_SESSION['user_id'] = $conn->insert_id;
        $_SESSION['name']    = $name;
        header("Location: Home.php");
        exit;
    } else {
        $error = "Email already exists!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - JHM Learning Hub</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: Arial;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1a73e8, #00bcd4);
        }

        .brand {
            text-align: center;
            color: white;
            margin-bottom: 24px;
        }

        .brand h1 {
            font-size: 2rem;
            font-weight: 700;
        }

        .brand p {
            opacity: 0.85;
            margin-top: 6px;
            font-size: 0.95rem;
        }

        .brand .underline {
            width: 40px;
            height: 3px;
            background: white;
            margin: 8px auto 0;
            border-radius: 2px;
        }

        .box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
        }

        h2 { margin-bottom: 4px; font-size: 1.3rem; }

        .subtitle {
            color: gray;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 0.95rem;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #1a73e8;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover { background: #1557b0; }

        .error { color: red; margin-bottom: 10px; font-size: 0.9rem; }

        p { margin-top: 15px; text-align: center; font-size: 0.9rem; }

        a { color: #1a73e8; text-decoration: none; }
    </style>
</head>
<body>

    <div class="brand">
        <h1>🎓 JHM Learning Hub</h1>
        <p>Learn f0r Free. Grow at your own pace.</p>
        <div class="underline"></div>
    </div>

    <div class="box">
        <h2 style="text-align:center;">JHM Learning Hub</h2>
        <p class="subtitle" style="text-align:center;">Create your account</p>

        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>

        <form method="POST">
            <input type="text"     name="name"     placeholder="Full Name" required>
            <input type="email"    name="email"    placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register & Start Learning</button>
        </form>

        <p>Already registered? <a href="login.php">Login here</a></p>
    </div>

</body>
</html>