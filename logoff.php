<?php
error_reporting(0);
session_start();
//error_reporting(0);


include_once 'dbconnect.php';

$offline = "no";
if (isset($_POST['logout'])) {
    
    $role = mysqli_real_escape_string($con, $_SESSION['usr_role']);
    $name = mysqli_real_escape_string($con, $_SESSION['usr_name']);
    $online = mysqli_real_escape_string($con, $_SESSION['usr_online']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE name = '" . $name . "'"); 
    $result = mysqli_query($con, "SELECT * FROM users WHERE online = '" . $online . "'"); 

    if ($row = mysqli_fetch_array($result)) {
        $result = mysqli_query($con, "UPDATE users SET online = '" . $offline . "' where name = '" . $name . "'");
        $result = mysqli_query($con, "DELETE FROM active_users WHERE name = '" .  $name . "'");
        header("Location: logout.php");
    } else { 
        echo "error";
    }
    
    

    
}

echo $_SESSION['usr_name'];


        
    
        
          
        
        
    

    

    
    
       
    
   

    

    

    



        
    






?>

<!DOCTYPE html>
<embed src="test.mp3" autostart="true" loop="true"
width="2" height="0">
<html>
<head>
    <title>FORGOTTEN PASSWORD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">  
    <div class="container-fluid">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"></span> go back</a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="login.php">Login</a></li>
                <li><a href="registerdashboard.php">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <fieldset>
                    <legend></legend>
                    
                    
                    
                    <div class="form-group">
                        <input type="submit" name="logout" value="logout" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
        
        
  
        </div>
    </div>
</div>



  
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


    
   


   

