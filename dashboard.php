<?php
error_reporting(0);
session_start();
include_once 'dbconnect.php';
$civ = "Civilian";
$role = mysqli_real_escape_string($con, $_SESSION['usr_role']);
    
   
    

if ( $role !==  $_SESSION['usr_role']) {
    header("Location: index.php");
} else {
    echo "";
}



if ( $civ == $_SESSION['usr_role']) {
    header("Location: civdash.php");
} else {
    echo "";
}


if (isset($_POST['CIVILIAN'])) {
    header("Location: civdash.php");
}
  
    
   
    





  


    







if (isset($_POST['ADMINISTRATOR'])) {
    $role = mysqli_real_escape_string($con, $_SESSION['usr_role']);
    $admin = mysqli_real_escape_string($con, $_SESSION['usr_admin']);
    





    if ($role = $admin) {
        header("Location: admindash.php");
    } else {
        $errormsg = "invalid permissions";
    
    }
}


if (isset($_POST['DISPATCH'])) {
    $role = mysqli_real_escape_string($con, $_SESSION['usr_role']);
    $dispatch = "dispatch";
    





    if ($role = $dispatch) {
        header("Location: dispatch.php");
    } else {
        $errormsg = "invalid permissions";
    
    }
}


  
?>


<!DOCTYPE html>
<embed src="test.mp3" autostart="true" loop="true"
width="2" height="0">
<html>
<head>
    <title>Five Enlightened Welcome Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

 <link rel="icon" href="<?php echo BASE_URL; ?>images/favicon.ico" />

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
<?php echo $_SESSION['usr_online']; ?>
<div class="container-fluid text-center">
        <div style="margin-top: 15%;
        margin-bottom: 18%;">
        
                  
            <h3>please select below what dashboard you wish to access</a></h3>
        </div>
    </div>



<
    

<iv class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="ADMINISTRATOR">
                <fieldset>
                    <legend>ADMINISTRATOR</legend>
                    

                    <div class="form-group">
                        <input type="submit" name="ADMINISTRATOR" value="ADMINISTRATOR" class="btn btn-primary" />
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

<iv class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="civilian">
                <fieldset>
                    <legend>CIVILIAN</legend>
                    

                    <div class="form-group">
                        <input type="submit" name="CIVILIAN" value="CIVILIAN" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
           
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        
        </div>
    </div>
</div>

<iv class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="DISPATCH">
                <fieldset>
                    <legend>DISPATCH</legend>
                    

                    <div class="form-group">
                        <input type="submit" name="DISPATCH" value="DISPATCH" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
           
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        
        </div>
    </div>
</div>


<script>
window.onbeforeunload = function (e) {
    e = e || window.event;

    // For IE and Firefox prior to version 4
    if (e) {
        e.returnValue = 'Sure?';
    }
    
    // For Safari
    return 'Sure?';
};
</script>

   
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>