<?php include ('header.php'); ?>

<div class="container">
    <div class="row-xl-6 mt-5">
        <h1>Login Now</h1><br>
    </div>
    <div class="row-xl-6">
        <form method="post" action="login_submit.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php include ('footer.php'); ?>