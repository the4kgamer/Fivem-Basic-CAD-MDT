

<?php 

$conn = mysqli_connect("localhost", "root", "", "testdb");

$result = mysqli_query($conn, "SELECT * FROM messages");

$data = array();

while ($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;

}

echo json_encode($data);