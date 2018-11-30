<?php
error_reporting(0);
session_start();



error_reporting(0);


include_once 'dbconnect.php';
$west = "west";
$east = "east";

if (isset($_POST['delete'])) {
    
    
    
    
   
    $searchname = mysqli_real_escape_string($con, $_POST['searchname']);
    
    $result = mysqli_query($con, "SELECT * FROM vehicles WHERE code = '" . $searchname . "'");


    if ($row = mysqli_fetch_array($result)) {
        $sql = mysqli_query($con, "select * from vehicles where vehicleplate = '" . $searchname . "'");
        //$delete_error = "Vehicle deleted successfully from your account";
    } else { 
       // $delete_error =  "failed, please make sure that you have all the casing and spelling correct";
    }

        
          
   
    

    




    
        
        
   

    
    
    

    
}

?>
 

    

    
   

    
        
     
    


    


     



 

<!DOCTYPE html>
<embed src="test.mp3" autostart="true" loop="true"
width="2" height="0">
<html>
<head>

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
                        <label for="searchname">Vehicle PLATE</label>
                        <input type="searchname" name="searchname" placeholder="Enter vehicle plate" required class="form-control" />
                        <span class="text-danger"><?php if (isset($delete_error)) echo $delete_error; ?></span>
                        
                    </div>

                

                    <div class="form-group">
                        <input type="submit" name="delete" value="Search for vehicle" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
        <h1>SEARCH RESULTS</h1>
        
<?php    
        $searchname = mysqli_real_escape_string($con, $_POST['searchname']);
        $result = mysqli_query($con, "SELECT * FROM vehicles WHERE vehicleplate = '" . $searchname . "'"); 
        
        
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {  
                echo " vehicle model: " . $row["vehiclename"]. " -plate: "  . $row["vehicleplate"]. " -OWNER: " . $row["name"] . "<br>";
            }
        } else {
            echo "sorry, that licence plate does not come up in our registered vehicle database, please check spelling/casing and try again";    
            
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

