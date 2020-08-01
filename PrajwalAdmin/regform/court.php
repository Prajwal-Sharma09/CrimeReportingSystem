<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');

if(isset($_POST['done'])){

    $court_name = $_POST['court_name'];
    $court_location = $_POST['court_location'];
    $hearing_date = $_POST['hearing_date'];
    $hearing_time = $_POST['hearing_time'];

    $q = "INSERT INTO court (court_name, court_location, hearing_date, hearing_time) VALUES ('$court_name','$court_location','$hearing_date', '$hearing_time')";

  $query = mysqli_query($con,$q);
  header('location:../court.php');
}


?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin-Court</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="col-lg-6 m-auto">

    <form method="post" enctype="multipart/form-data">

      <br><br><div class="card">

        <div class="card-header bg-dark">
          <h1 class="text-white text-center"> Enter Court Details Here </h1>

        </div><br>

        <label>Court Name </label>
        <input type="text" name="court_name" class="form-control"><br>

        <label>Court Location</label>
        <input type="text" name="court_location" class="form-control"><br>

        <label>Hearing Date</label>
        <input type="text" name="hearing_date" class="form-control"><br>

        <label>Hearing Time</label>
        <input type="text" name="hearing_time" class="form-control"><br>

        <button class="btn btn-success" type="submit" name="done">Submit</button>
        <br>

        <button class="btn btn-danger" type="submit" name="cancel">Back to Dashboard</button>
        <br><br>

        <?php
          if(isset($_POST['cancel'])){
              header('location:../index.php');
            }

        ?>

       </div>
    </form>

  </div>



</body>
</html>