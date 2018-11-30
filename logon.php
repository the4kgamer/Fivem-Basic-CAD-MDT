<?php
error_reporting(0);
session_start();
//error_reporting(0);


include_once 'dbconnect.php';

$yaboi = "yes";
if (isset($_POST['login'])) {
    $valid =  mysqli_real_escape_string($con, $_SESSION['usr_valid']);
    $purpose =  mysqli_real_escape_string($con, $_POST['purpose']);
    $role = mysqli_real_escape_string($con, $_SESSION['usr_role']);
    $name = mysqli_real_escape_string($con, $_SESSION['usr_name']);
    $online = mysqli_real_escape_string($con, $_SESSION['usr_online']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE name = '" . $name . "'"); 
    $result = mysqli_query($con, "SELECT * FROM users WHERE online = '" . $online . "'"); 
    
    if ($_SESSION['usr_valid'] != $yaboi) {
        $errormsg = "your account has not yet been approved by an admin, please be patiant";

    } else {
        if ($row = mysqli_fetch_array($result)) {
            $result = mysqli_query($con, "UPDATE users SET online = '" . $yaboi . "' where name = '" . $name . "'");
          
            header("Location: dashboard.php");
        } else { 
            echo "error";
        }
        
        if(mysqli_query($con, "INSERT INTO active_users(name,role,purpose) VALUES('" . $name . "', '" . $role . "', '" . $purpose . "')")) {
        }
    
    }

    
      

    
    
}

echo $_SESSION['usr_name'];
echo $_SESSION['usr_role'];
echo $_SESSION['usr_valid'];


        
    
        
          
        
        
    

    

    
    
       
    
   

    

    

    



        
    






?>

<!DOCTYPE html>
<embed src="test.mp3" autostart="true" loop="true"
width="2" height="0">
<html>
<head>
    <title>logon</title>
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
                    <legend>this is just a verification page, this tests stuff like if your account is valid or not</legend>
                    
                    <div class="form-group">
                        <label for="purpose">Purpose</label>
                        <input type="text" name="purpose" placeholder="please enter what the purpose of your session is going to be" required value="" class="form-control" />
                        
                        
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="login" value="login" class="btn btn-primary" />
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


    
   


   



    
