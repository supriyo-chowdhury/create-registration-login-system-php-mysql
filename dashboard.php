<?php
include 'includes/auth.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
<h2>Welcome <?= $_SESSION['user']; ?></h2>
<a href="logout.php">Logout</a>
</div>

</body>
</html>