<?php
error_reporting(0);
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';

$error = false;


if (isset($_POST['signup'])) {
    

    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $role = mysqli_real_escape_string($con, $_SESSION['usr_role']);
    $admin = mysqli_real_escape_string($con, $_SESSION['usr_admin']);
    $passcode = mysqli_real_escape_string($con, $_POST['passcode']);
    $cpass_code = mysqli_real_escape_string($con, $_POST['cpasscode']);
    $online = mysqli_real_escape_string($con, $_SESSION['usr_online']);
    $purpose =  mysqli_real_escape_string($con, $_POST['usr_purpose']);
    $valid = mysqli_real_escape_string($con, $_SESSION['usr_valid']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE name = '" . $name . "' or email = '" . $email . "'");
    
    
    
                     
   
 
   
                     

   
    
    
     
    


    $cpass_code = "FiveAdminEnlightened";

    $role = "ADMINISTRATOR";

    
    $admin = "ADMINISTRATOR";
    
    $online = "no";

    $valid = "no";


    if ($row = mysqli_fetch_array($result)) {
        if($email == $row['email'] OR $name == $row['name']) {
        
           $error = true;
           $errormsg = "email or name already in database!";
        }
       
    }  
  




    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($cpassword != $password) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    
  
    
   
       
    
    
        
    
       
        
    
    
    if($cpass_code != $passcode) {
        $error = true;
        $passcode_error = "incorrect passcode";
    }

    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(name,email,passcode,role,admin,date,password,online,valid) VALUES('" . $name . "', '" . $email . "', '" . $passcode . "', '" . $role . "', '" . $admin . "', '" . $date . "', '" . $password . "', '" . $online . "', '" . $valid ."')")) {
            $successmsg =  "Successfully Registered! <a href='login.php'>Click here to Login</a>"; 
        
            
        } else {
            $errormsg = "there is already an account with this name";
        }
        if(mysqli_query($con, "INSERT INTO valid(name,role) VALUES('" . $name . "', '" . $role . "')")) {
        }
    
    }
    
    
}



  
       

        
    

    
        
    
    
   
        
   
   
 

    
   
        



            

       



        
            
            
        
        

            
    
            
        

    
       
                
    
        
         
            
    
        
    
        
            
        
    
        
        
            
    
            
        
            
        
        
    

        
               
        
        
        
    

        
                
        

        
           

        
    
            
            
    

       
       
        
    


  
?>

<!DOCTYPE html>
<embed src="test.mp3" autostart="true" loop="true"
width="2" height="0">
<html>
<head>
    <title>Admin registration</title>
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
            <a class="navbar-brand" href="registerdashboard.php"><span class="" aria-hidden="true"></span> Go back</a>
            <h2>Ignore the warning(s) ^^ above if any<br></h2>
        </div>
        
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
                <li class="active"><a href="register.php">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                    <legend>Sign Up for Admin access</legend>


                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter your Discord name" required value="<?php if($error) echo $name; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>

                     <div class="form-group">
                        <label for="passcode">passcode</label>
                        <input type="passcode" name="passcode" placeholder="enter the code you got on discord for admin" required class="form-control" />
                        <span class="text-danger"><?php if (isset($passcode_error)) echo $passcode_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Date Of Birth</label>
                        <input type="text" name="date" placeholder="MM/DD/YY" required value="<?php if($error) echo $date; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($date_error)) echo $date_error; ?></span>
                        
                    </div>

                

                    <div class="form-group">
                        <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Already Registered? <a href="login.php">Login Here</a>
        </div>
    </div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
