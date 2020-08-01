<?php

include 'conn.php';

$complain_id = $_GET['complain_id'];

$q = "DELETE FROM complain where complain_id = $complain_id ";

mysqli_query($con,$q);

header('Location:display.php');


?>


