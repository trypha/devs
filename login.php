<?php include 'config/conn.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Funny Movies</title>

    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <!--custom css-->
    <link href="assets/css/dev.css" rel="stylesheet">

</head>
<body>
<!--header start-->
<div class="topnav">
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i>Funny Movies</a>
</div>
<div class="header">
    <h2>Login</h2>
</div>
<div class="container">
    <div class="inputs">
        <form method="post" action="form_process.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
    </div>
</div>
</body>
</html>