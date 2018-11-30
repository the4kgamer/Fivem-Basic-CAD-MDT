<?php
error_reporting(0);
session_start();



include_once 'dbconnect.php';

$error = false;



if (isset($_POST['submit'])) {
    $weaponname = mysqli_real_escape_string($con, $_POST['weapon_name']);
    $weaponstatus = mysqli_real_escape_string($con, $_POST['weapon_status']);
    $name = mysqli_real_escape_string($con, $_SESSION['usr_name']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE name = '" . $name . "'");


    



    

    
    
        
    




    if (!$error) {
        if(mysqli_query($con, "INSERT INTO weapons(name,weapon_name,weapon_status) VALUES('" . $name . "',   '" . $weaponname . "',  '" . $weaponstatus . "')")) {
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
    <title>weapon REGISTRATION</title>
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
                        <label for="weapon_name">weapon name</label>
                        <input type="text" name="weapon_name" placeholder="Enter your weapon model name" required value="<?php if($error) echo $weaponname; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($weaponname_error)) echo $weaponname_error; ?></span>
                       
                    </div>
                    
                    <div class="form-group">
                        <label for="weapon_status">weapon status</label>
                        <input type="text" name="weapon_status" placeholder="Enter your weapons licence" required value="<?php if($error) echo $weaponstatus; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($weaponstatus_error)) echo $weaponstatus_error; ?></span>
                     
                    </div>

                    

                

                    <div class="form-group">
                        <input type="submit" name="submit" value="enter weapon into database" class="btn btn-primary" />
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
