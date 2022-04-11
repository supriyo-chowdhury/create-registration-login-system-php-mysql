<?php include ('header.php'); ?>
<?php 

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $time = $_POST['time'];

    $update = "INSERT INTO users (name, email, password, time) VALUES ('$name', '$email', '$password', '$time')";

    $result = mysqli_query($conn, $update);
    if (!$result) {
        echo "Something Went Wrong!";
    } else {
        echo "Registration Success!";
    }

    mysqli_close($conn);

?>

<a class="btn btn-success" href=index.php>Go to Home</a>