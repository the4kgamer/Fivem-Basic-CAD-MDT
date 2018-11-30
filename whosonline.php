<?php
error_reporting(0);
session_start();





include_once 'dbconnect.php';
$role = mysqli_real_escape_string($con, $_SESSION['usr_role']);
$admin = mysqli_real_escape_string($con, $_SESSION['usr_admin']);
if($role != $admin) {
    header("Location: dashboard.php");
}
$sql = "SELECT name, role, purpose FROM active_users";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "name: " . $row["name"]. " - Role: " . $row["role"]. " - purpose: " . $row["purpose"] . "<br>";
    }
} else {
    echo "0 results";
}

?>
<!DOCTYPE html>
<embed src="test.mp3" autostart="true" loop="true"
width="2" height="0">
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>