<?php
error_reporting(0);
session_start();
include_once 'dbconnect.php';
$name = mysqli_real_escape_string($con, $_SESSION['usr_name']);
if($name = $name) {
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>

<embed src="test.mp3" autostart="true" loop="true"
width="2" height="0">
</embed>
<html>
<head>
    <title>Five Enlightened Welcome Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

 <link rel="icon" href="<?php echo BASE_URL; ?>/images/favicon.ico" />

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div >
                
              
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logoff.php">Log Out</a></li>
                <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="registerdashboard.php">Sign Up</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
    
    <div class="container-fluid text-center">
        <div style="margin-top: 15%;
        margin-bottom: 18%;">
            <h2><?php if (isset($_SESSION['usr_id'])) { ?>
                <p>Signed in as <?php echo $_SESSION['usr_name']; ?></p>
                <?php } ?></h2>
            <h2>Welcome to the Five Enlightened CAD/MDT system<br></h2>
            <h3>If you are new, you may <a href="Registerdashboard.php">register</a> or if you already have an account, you may <a href="Login.php">Login here</a></h3>
            <img src="logo.png" width="853" height="697">
        </div>
    </div>
    
    <footer class="container-fluid text-center">
        <div style="margin-top: 2%;
        margin-bottom: 2%;">
  <p></a></p>
  </div>
</footer>
    
   
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>