<?php include ('header.php'); ?>
<?php 

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $name = $_SESSION['name'];
    }

    $data = "SELECT * FROM users";

    $result = mysqli_query($conn, $data);
    if (!$result) {
        echo "Something Went Wrong!";
    }
?>

<div class="container">
    <div class="row-xl-6 mt-5">
        <h1>All User Details</h1><br>
    </div>
    <div class="row-xl-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>

            <?php 
            $i = 1;
            while ($allUserData = mysqli_fetch_array($result)) {
            ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $allUserData['name']; ?></td>
                    <td><?php echo $allUserData['email']; ?></td>
                    <td><?php echo $allUserData['password']; ?></td>
                    <td><?php echo $allUserData['time']; ?></td>
                </tr>
            </tbody>

            <?php
                $i++;
            }
            ?>

        </table>
    </div>
</div>

<?php include ('footer.php'); ?>