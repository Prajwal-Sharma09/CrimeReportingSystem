<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');

if(isset($_POST['done'])){

    $police_id = $_GET['police_id'];
    $police_name = $_POST['police_name'];
    $address = $_POST['address'];
    $phone_no = $_POST['phone_no'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    

    $image = '';
  $destinationfile = '';
  if(isset($_FILES['image'])){
    $image =  $_FILES['image'];
    //image upload..

      $filename = $image['name'];
      $fileerror = $image['error'];
      $filetmp = $image['tmp_name'];

    
      $fileext = explode('.',$filename);
      $filecheck = strtolower(end($fileext));

      $fileextstored = array('png','jpg','jpeg');

      if(in_array($filecheck,$fileextstored)){
        $destinationfile = 'PoliceImage/'.$filename;
        move_uploaded_file($filetmp, $destinationfile);
      }
  }

      $q = "UPDATE police SET police_id=$police_id, police_name='$police_name', address='$address', phone_no='$phone_no', age='$age', gender='$gender', image='$destinationfile' WHERE police_id=$police_id";

  
  $query = mysqli_query($con,$q);

  header('Location:police.php');

}



?>



<!DOCTYPE html>
<html>
<head>
  <title>Police-Admin</title>

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
          <h1 class="text-white text-center"> Update Police Details Here </h1>

        </div><br>

        <label>Police Name </label>
        <input type="text" name="police_name" class="form-control"><br>

        <label>Address</label>
        <input type="text" name="address" class="form-control"><br>

        <label>Phone Number </label>
        <input type="text" name="phone_no" class="form-control"><br>

        <label>Age </label>
        <input type="text" name="age" class="form-control"><br>

        <label>Gender </label>
        <input type="text" name="gender" class="form-control"><br>

        <label>Image </label>
        <input type="file" name="image" accept="image/*" class="form-control"><br>

        <button class="btn btn-success" type="submit" name="done">Submit</button>
        <br>

        <button class="btn btn-danger" type="submit" name="cancel">Back to Dashboard</button>
        <br>

        <?php
            if(isset($_POST['cancel'])){
              header('location:index.php');
            }

        ?>

       </div>
    </form>

  </div>



</body>
</html>