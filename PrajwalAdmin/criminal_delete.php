<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');

$criminal_id = $_GET['criminal_id'];

$q = "DELETE FROM criminal where criminal_id = $criminal_id ";

mysqli_query($con,$q);

header('Location:criminal.php');

?>
