<?php
error_reporting(0);
session_start();






include_once 'dbconnect.php';
$west = "west";
$east = "east";

if (isset($_POST['delete'])) {
    
    
    
    
   
   
    $deletename = mysqli_real_escape_string($con, $_POST['deletename']);
    $result = mysqli_query($con, "SELECT * FROM vehicles WHERE code = '" . $deletename . "'");


    if ($row = mysqli_fetch_array($result)) {
        $sql = mysqli_query($con, "DELETE FROM vehicles WHERE code = '" . $deletename . "'");
        $delete_error = "Vehicle deleted successfully from your account";
    } else { 
        $delete_error =  "failed, please make sure that you have all the casing and spelling correct";
    }

        
          
   
    

    




    
        
        
   

    
    
    

    
}

?>
 

    

    
   

    
        
     
    


    


     



 

<!DOCTYPE html>
<embed src="test.mp3" autostart="true" loop="true"
width="2" height="0">

<html>
<head>
<h7>just for some little information, the VIN id's main purpose is for it to be a confedential ID that is randomly generated when registering your vehicle to prevent others from removing your vehicles there for making for some awkward RP situations when the LEO cant search your plates up and find your vehicle </h7>
    <title>Delete User</title>
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
            <a class="navbar-brand" href="admindash.php"><span class="" aria-hidden="true"></span> Go back</a>
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
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                    <legend>Delete Vehicle from your user</legend>


                    

                     <div class="form-group">
                        <label for="deletename">Vehicle VIN number</label>
                        <input type="deletename" name="deletename" placeholder="enter the VIN number displayed" required class="form-control" />
                        <span class="text-danger"><?php if (isset($delete_error)) echo $delete_error; ?></span>
                        
                    </div>

                

                    <div class="form-group">
                        <input type="submit" name="delete" value="Delete Vehicle" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
        <h1>BELOW ARE YOUR EXISTING CARS</h1>
        
<?php    
        $name = mysqli_real_escape_string($con, $_SESSION['usr_name']);
        $result = mysqli_query($con, "SELECT * FROM vehicles WHERE name = '" . $name . "'"); 
        
        
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {  
                echo " vehicle model: " . $row["vehiclename"]. " -plate: "  . $row["vehicleplate"]. " -VIN: " . $row["code"] . "<br>";
            }
        } else {
            echo "sorry, you do not currently have any registered vehicles, to do so, please consider doing so by <a href='civvehicle.php'>clicking here</a>";    
            
        }
            // output data of each row
        
?>
        </div>
    </div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

