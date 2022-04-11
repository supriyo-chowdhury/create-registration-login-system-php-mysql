<?php include ('header.php'); ?>
<?php 

    $email = $_POST['email'];
    $password = $_POST['password'];

    $login_check = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $login_check);
    if (!$result) {
        echo "Something Went Wrong!";
    } 

    $row = mysqli_fetch_assoc($result);

    if ($row) {
        echo "Hello " . $row['name'] . "<br>";

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];

        ?>
        <a class="btn btn-success" href=dashboard.php>Go to Dashboard</a>
        <?php
    } else {
        echo "Login Failed!";
    }
    
    mysqli_close($conn);

?>

