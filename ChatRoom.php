<?php
error_reporting(0);
session_start();



require 'dbconnect.php';



    
    







if (isset($_POST['send'])) {
    //$time = date("Y/m/d i s a");
    $time = date("h:i a d/m/y");
    $eval = "i4";
    //$time = mysqli_real_escape_string($con, $_SESSION['time']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $name = mysqli_real_escape_string($con, $_SESSION['usr_name']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE name = '" . $name . "'");
	$message = $_POST['message'];
	$name = $_SESSION['usr_name'];
	
	$file = 'messages.txt';

    
	//essage = file_get_contents($file);

    $current .= "John Smith\n";
 
    file_put_contents($file, $message);
	
    
 


    
    
	
    // file was modified



    

    

        
    




    if (!$error) {
        if(mysqli_query($con, "INSERT INTO messages(name,message,time,eval) VALUES('" . $name . "',   '" . $message . "', '" . $time . "', '" . $eval . "')")) {
			
        } else {
            $message_error = "Error in sending";
        }
    }
}
    
if (isset($_POST['clear'])) {
    $admini = "ADMINISTRATOR";
    $eval = "i4";
    $role = mysqli_real_escape_string($con, $_SESSION['usr_role']); 
    $result = mysqli_query($con, "SELECT * FROM messages WHERE eval = '" . $eval. "'"); 
   
    

    




    if ($role != $admini) {
        $errormsg =  "you do not have permission to do this";
    } else {
        if ($row = mysqli_fetch_array($result)) {
            $result = mysqli_query($con, "DELETE FROM messages WHERE eval = '" . $eval . "'");
            $errormsg = "chat room cleared";

        } else {
            $errormsg = "chat room cleared";
        }

           
        
    
    }    
}
            
             
        
   

if(filemtime('messages.txt') > $result_set['filetime']) {
} else {
	
	echo "file has been changed";
}
   
    //if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
     // $error = true;
   // $name_error = "Name must contain only alphabets and space";
  //  }
echo "Today is " . date("Y/m/d") . "<br>";
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
                    <legend>Chat Room</legend>


                    
                    <div class="form-group">
                        <label for="plate">Message</label>
                        <input type="text" name="message" placeholder="Enter your message here" required value="<?php if($error) echo $message; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($message_error)) echo $message_error; ?></span>
                     
                    </div>

                    

                

                    <div class="form-group">
                        <input type="submit" name="send" value="send message" class="btn btn-primary" />
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

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="submit">
                <fieldset>
                    <legend>Admin tools</legend>


                

                    

                

                    <div class="form-group">
                        <input type="submit" name="clear" value="clear all messages" class="btn btn-primary" />
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
<table>
    <tr>
    </tr>
<tbody id="data">

<script>

setInterval(function() { yeet() },1);


function yeet() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "data.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();
    ajax.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            var data = JSON.parse(this.responseText);
           console.log(data);
           var html = "";
           for (var a = 0; a < data.length; a++){
               




               var name = data[a].name;
               var message = data[a].message;
               var time = data[a].time;
               html += "<tr>";
                   html += "<td>" + name + "</td>";
                   html += "<td>" + message + "</td>";
                   html += "<td>" + time + "</td>";
               html += "</tr>";
           }
           document.getElementById("data").innerHTML = html;
        

           

        }


           
        
        
          
           

    
        

        



        
        
        
    }

   
    
        
        

        
}

    


    


        

    



   
    

</script>



<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
