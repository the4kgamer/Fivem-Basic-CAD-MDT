<?php
error_reporting(0);
session_start();



include_once 'dbconnect.php';

$error = false;
$test = rand(90183, 19991);


if (isset($_POST['submit'])) {
    $code = mysqli_real_escape_string($con, $_POST['code']);
    $vehiclename = mysqli_real_escape_string($con, $_POST['vehiclename']);
    $vehicleplate = mysqli_real_escape_string($con, $_POST['vehicleplate']);
    $name = mysqli_real_escape_string($con, $_SESSION['usr_name']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE name = '" . $name . "'");


    $code = rand(90183, 19991);
    


    

    
    
        
    




    if (!$error) {
        if(mysqli_query($con, "INSERT INTO vehicles(name,vehiclename,vehicleplate,code) VALUES('" . $name . "',   '" . $vehiclename . "',  '" . $vehicleplate . "', '" . $code . "')")) {
            $successmsg = "Successfully Registered!"; 
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
    

   
    //if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
     // $error = true;
   // $name_error = "Name must contain only alphabets and space";
  //  }
    
?>

<!DOCTYPE html>
<embed src="test.mp3" autostart="true" loop="true"
width="2" height="0">
<html>
<head>
    <title>VEHICLE REGISTRATION</title>
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
            <a class="navbar-brand" href="civdash.php"><span class="" aria-hidden="true"></span> Go back</a>
            <h2>Ignore the warning(s) ^^ above if any<br></h2>
        </div>
        
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="submit">
                <fieldset>
                    <legend></legend>


                    <div class="form-group">
                        <label for="vehiclename">Vehicle name</label>
                        <input type="text" name="vehiclename" placeholder="Enter your vehicle model name" required value="<?php if($error) echo $vehiclename; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($vehiclename_error)) echo $vehiclename_error; ?></span>
                       
                    </div>
                    
                    <div class="form-group">
                        <label for="plate">Vehicle plate</label>
                        <input type="text" name="vehicleplate" placeholder="Enter your vehicles plate name" required value="<?php if($error) echo $vehicleplate; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($vehicleplate_error)) echo $vehicleplate_error; ?></span>
                     
                    </div>

                    

                

                    <div class="form-group">
                        <input type="submit" name="submit" value="enter vehicle into database" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
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
