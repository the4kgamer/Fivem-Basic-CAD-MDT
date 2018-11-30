<?php
error_reporting(0);
session_start();
include_once 'dbconnect.php';
$role = mysqli_real_escape_string($con, $_SESSION['usr_role']);
$admin = mysqli_real_escape_string($con, $_SESSION['usr_admin']);
if($role != $admin) {
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<embed src="test.mp3" autostart="true" loop="true"
width="2" height="0">
<html>
<head>
    <title>ADMIN DASHBOARD</title>
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
                
                <a class="navbar-brand" href="dashboard.php"></span> Go Back</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logoff.php">Log Out</a></li>
                <?php } else { ?>
            
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
    


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
                <li><p class="navbar-text"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> your role is <?php echo $_SESSION['usr_role']; ?></p></li>
                
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
            <h2>Welcome to the ADMIN DASHBOARD<br></h2>
            <h3>here you may select below a ADMIN function you want to access</a></h3>
            
        </div>
    </div>
    
    

<nav class="navbar navbar-default" role="navigation">  
    <div class="container-fluid">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar3">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>
       
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="adminusermanagment.php">user managment</a></li>
                
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-default" role="navigation">  
    <div class="container-fluid">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar3">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>
       
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="usersawait.php">users awaiting access</a></li>
                
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-default" role="navigation">  
    <div class="container-fluid">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar3">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>
       
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="whosonline.php">who is online?</a></li>
                
            </ul>
        </div>
    </div>
</nav>

<h2>DEVELOPER TOOLS<br></h2>
<nav class="navbar navbar-default" role="navigation">  
    <div class="container-fluid">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>
       
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="databasemanagment.php">DATABASE MANAGMENT/VIEWER</a></li>
                
            </ul>
        </div>
    </div>
</nav>

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