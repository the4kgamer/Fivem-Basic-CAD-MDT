<?php
error_reporting(0);
session_start();
//error_reporting(0);


include_once 'dbconnect.php';


if (isset($_POST['create_table'])) {

    $createtable = mysqli_real_escape_string($con, $_SESSION['create']);
   
    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and date = '" . $date . "'"); 

    if ($row = mysqli_fetch_array($result)) {
        $sql = "CREATE table $create";
        $cpassword_error = "DATABASE edited successfully";
    } else { 
        $cpassword_error =  "error";
    }
    
   


    if($cpassword != $password) {
        $error = true;
        $cpassword_error = "Password and Confirm Password don't match";
    }
}




        
    
        
          
        
        
    

    

    
    
       
    
   

    

    

    



        
    






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
                    <legend>retrieve forgotten password</legend>
                    
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Your Email" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="date">Date of birth</label>
                        <input type="text" name="date" placeholder="MM/DD/YY" required class="form-control" />
                    </div>

                     <div class="form-group">
                        <label for="name">New Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Confirm New Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <input type="create_table" name="create_table" value="create_table" class="btn btn-primary" />
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
