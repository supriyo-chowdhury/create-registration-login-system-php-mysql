<?php
include 'config/db.php';
include 'includes/functions.php';

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name,email,password) VALUES (?,?,?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        $msg = "Registration successful! <a href='login.php'>Login</a>";
    } else {
        $msg = "Email already exists!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
<h2>Register</h2>
<p><?= $msg ?></p>

<form method="post">
<input name="name" placeholder="Name" required>
<input name="email" type="email" placeholder="Email" required>
<input name="password" type="password" placeholder="Password" required>
<button type="submit">Register</button>
</form>

<p>Already have account? <a href="login.php">Login</a></p>
</div>

</body>
</html>