<?php include('conn.php') ?>
<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Funny Movies</title>
    
    <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--custom css-->
    <link href="dev.css" rel="stylesheet">

</head>

<body>
    <div class="topnav">
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i>Funny Movies</a>
    </div>
    
  <div class="header">
    <h2>Please Register</h2>
  </div>
  
  <form method="post" action="register.php">
  <?php include('errors.php'); ?>
      <div class="inputs">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
          </div>
  </form>
  </body>
</html>