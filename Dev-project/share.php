<?php session_start(); ?>
<?php include('conn.php') ?>

<?php
if (isset($_POST['post_url'])) {
   $url = mysqli_real_escape_string($db, $_POST['url']);
    
    if (empty($url)) {
        array_push($errors,"video URL required");
    }
    if (count($errors)==0){
        $query = "INSERT INTO user (url)VALUE($url)";
        mysqli_query($db, $query);
        $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You have shared a video successfully";
  	header('location: shared.php');
    }
}
?>

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
	 <!--header start-->
    <div class="topnav">
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i>Funny Movies</a>
        <div class="submit" style="margin:10px">
        <button type="submit"> <a href="shared-signin.php" style="color: red; text-decoration: none;">back</a></button>
        </div>
        <div class="submit">    
        <?php  if (isset($_SESSION['username'])): ?>
        <p style="color:white; margin-right:100px">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
           <?php endif ?>
        </div>
        </div>
        
    <!-- header-->
    
    <!-- form-->
    <div class="share" style="margin-top:150px">
   <form method="post" action="share.php">
        <?php include('errors.php'); ?>
        <div class="main">
          <p><strong>Share a Youtube movie</strong></p>  
        <label>Youtube URL:</label> 
        <input type="text" name="url">
        </div>
        <div class="but">
      <button type="submit" name="post_url">Share</button>
            </div>
          </form>
          </div>
    </body>
</html>