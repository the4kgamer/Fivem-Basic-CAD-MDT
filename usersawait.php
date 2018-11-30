<?php
error_reporting(0);
session_start();






include_once 'dbconnect.php';
$west = "west";
$east = "east";
$yes = "yes";
if (isset($_POST['delete'])) {
    
    
    
    
   
   
    $approvename = mysqli_real_escape_string($con, $_POST['approvename']);
    $result = mysqli_query($con, "SELECT * FROM valid WHERE name = '" . $approvename . "'");
    $result = mysqli_query($con, "SELECT * FROM users WHERE name = '" . $approvename . "'");


    if ($row = mysqli_fetch_array($result)) {
        $result = mysqli_query($con, "DELETE FROM valid WHERE name = '" . $approvename . "'");
        $result = mysqli_query($con, "UPDATE users SET valid = '" . $yes . "' where name = '" . $approvename . "'");
      
        $delete_error = "account successfuly approved";
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

    <title>approve user</title>
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
                    <legend>approve user</legend>


                    

                     <div class="form-group">
                        <label for="approvename">Username</label>
                        <input type="approvename" name="approvename" placeholder="enter the users name" required class="form-control" />
                       
                        
                    </div>
                    
                

                    <div class="form-group">
                        <input type="submit" name="delete" value="approve" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
        <h1>BELOW ARE USERS REQUESTING ACCESS</h1>
        
<?php    
        
        $sql = "SELECT name, role FROM valid";
        $result = mysqli_query($con, $sql);
        
        
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {  
                echo " User name: " . $row["name"]. " -user role: "  . $row["role"]. "<br>";
            }
        } else {
            echo "no users currently request access";    
            
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

