<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');

$user_id = $_GET['user_id'];
$complain_id = $_GET['complain_id'];

$q = "DELETE FROM user_complain where complain_id = $complain_id ";

mysqli_query($con,$q);

header('Location:user_complaint.php');

?>
