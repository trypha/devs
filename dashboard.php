<?php
session_start();
include 'config/conn.php';
require_once 'functions.php';

// Get url info from db
$urls = [];
$stmt = $db->prepare('select * from urls');
$stmt->execute();
//$urls = $stmt->fetch()
$result = $stmt->get_result();
while($row = $result->fetch_object()) {
    $urls[] = $row;
}
$stmt->close();
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
    <div class="submit" style="margin: 10px">
        <button style="float: right"> <a href="logout.php" style="color: red; text-decoration: none">logout</a> </button>
    </div>
    <div class="submit" style="margin: 10px">
        <button type="submit"><a href="share.php" style="color: green; text-decoration: none">Share a movie</a></button>
    </div>
    <div class="submit">
        <?php  if (isset($_SESSION['username'])): ?>
            <p style="color:white; margin-right:100px">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif ?>
    </div>

</div>
<!-- header-->

<div class="container" style="margin-top:40px">
    <?php
    if(!$urls) {
        echo 'No rows';
    } else {
        foreach ($urls as $url){
            ?>
            <div class="row" style="margin: 20px 0">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?=$url->url ?>" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 style="color:red">Be Kind and Share</h3>
                    <h4>Shared by: <?php getUserByEmail($url->user_email , $db);?></h4>
                    <h4>Description:</h4>
                    <p>
                        <?=$url->description ?>
                    </p>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
</body>
</html>