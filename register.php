<?php include ('header.php'); ?>

<div class="container">
    <div class="row-xl-6 mt-5">
        <h1>Register Now</h1><br>
    </div>
    <div class="row-xl-6">
        <form method="post" action="register_submit.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <input type="hidden" name="time" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly="readonly">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php include ('footer.php'); ?>

