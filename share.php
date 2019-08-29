<?php
session_start();
include 'config/conn.php';
if (isset($_POST['post_url'])) {
    $errors =[];
    $email = $_SESSION['email'];
    $url = mysqli_real_escape_string($db, $_POST['url']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    if (empty($url)) {
        $errors[] = 'Video url is required';
    }
    if (empty($description)) {
        $errors[] = 'Kindly type description for your project';
    }
    if (count($errors)==0){
        $stmt = $db->prepare('INSERT INTO urls (user_email, url, description)VALUE(?, ?, ?)');
        $stmt->bind_param('sss', $email, $url, $description);
        $stmt->execute();
        $stmt->close();
        $_SESSION['success'] = "You have shared a video successfully";
        header('location: share.php');
    }
}

?>
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
    <div class="submit" style="margin:10px">
        <button type="submit"> <a href="dashboard.php" style="color: red; text-decoration: none;">back</a></button>
    </div>
    <div class="submit">
        <?php  if (isset($_SESSION['username'])): ?>
            <p style="color:white; margin-right:100px">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif ?>
    </div>
</div>

<!-- header-->

<div class="container">
    <!-- form-->
    <div class="share" style="margin-top:50px">
        <form method="post" action="share.php">
            <?php include 'errors.php'; ?>
            <div class="main">
                <p><strong>Share a Youtube movie</strong></p>
                <div class="form-group">
                    <label>Youtube URL:</label>
                    <input class="form-control" type="text" name="url">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
            </div>
            <div class="but">
                <button type="submit" name="post_url">Share</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>