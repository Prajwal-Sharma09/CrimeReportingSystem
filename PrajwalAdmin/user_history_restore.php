<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');

$user_id = $_GET['user_id'];

//$q = "DELETE FROM user where user_id = $user_id ";
$q = "UPDATE user SET status = '1' where user_id = $user_id";

mysqli_query($con,$q);

header('location:user.php');

?>
