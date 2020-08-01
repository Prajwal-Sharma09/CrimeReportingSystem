<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');

$complain_id = $_GET['complain_id'];

$q = "DELETE FROM complain where complain_id = $complain_id ";

mysqli_query($con,$q);

header('location:complaint.php');

?>
