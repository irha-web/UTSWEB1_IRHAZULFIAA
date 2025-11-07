<?php
session_start();
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Data login statis
    if ($username == 'admin' && $password == '1234') {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - POLGAN MART</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; }
        .login-box {
            width: 300px; margin: 100px auto; padding: 20px;
            background: white; border-radius: 8px; box-shadow: 0 0 5px gray;
        }
        input { width: 100%; padding: 8px; margin: 5px 0; }
        button { width: 100%; padding: 8px; background: #007bff; color: white; border: none; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
<div class="login-box">
    <h3>Login POLGAN MART</h3>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p class="error"><?= $error ?></p>
    </form>
</div>
</body>
</html>
