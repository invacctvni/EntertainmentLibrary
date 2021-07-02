<!--Build Connection -->
<?php
$conn = new mysqli('172.31.22.43','Jiaqi200477892','WH-tstIK2E','Jiaqi200477892');
if($conn==false)
{
    die("Not able to connect. " . $conn->connect_error);
}
?>

