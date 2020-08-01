<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');

$court_id = $_GET['court_id'];

$q = "DELETE FROM court where court_id = $court_id ";

mysqli_query($con,$q);

header('Location:court.php');

?>
