<?php include('conn.php') ?>
<?php session_start(); ?>
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
	<div class="vid">
		<iframe width="520" height="315" align="left" style="margin:0px 20px 30px 15%; border:none" src="https://www.youtube.com/embed/4pU4T3idI-I">
        </iframe>
            </div>
            <div class="cont">
        <h3 style="color:red">Be Kind and Share</h3>
        <h4>Shared by:
            <?php
         include('autoload.php')
            ?>
                </h4>
        <h4>Description:</h4>
        <p>This is a video designed for kids to help them learn how to be <br> kind and share what they can share with others in need of it</p>
	</div>
              
	<div class="vid">
		<iframe width="520" height="315" align="left" style="margin:0px 20px 30px 15%; border:none" src="https://www.youtube.com/embed/G3VMl-EY2DM">
        </iframe>
        </div>
        <div class="cont" style="margin-top:190px">
        <h3 style="color:red">Butterfly</h3>
        <h4>Shared by:<?php
         include('autoload.php')
            ?></h4>
        <h4>Description:</h4>
        <p>This is a video that shows the developement stage of butterfly </p>
	
        </div>
                  
	<div class="vid">
		<iframe width="520" height="315"align="left" style="margin:0px 20px 30px 15%; border:none" src="https://www.youtube.com/embed/3t6T5U8cd04">
        </iframe>
        </div>
        <div class="cont" style="margin-top:205px">
        <h3 style="color:red">Fish</h3>
        <h4>Shared by: <?php
         include('autoload.php')
            ?></h4>
        <h4>Description:</h4>
        <p>This is a video how fish aquairiums are made </p>
        </div>
    </div>

    
</body>
</html>