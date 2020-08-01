<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');

if(isset($_POST['done'])){

    $criminal_id = $_GET['criminal_id'];
    $criminal_name = $_POST['criminal_name'];
    $address = $_POST['address'];
    $phone_no = $_POST['phone_no'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
   
    $city = $_POST['city'];
    $complain_type = $_POST['complain_type'];


   $image = '';
    $destinationfile = '';
    if(isset($_FILES['image'])){
        $image =  $_FILES['image'];
        

        $filename = $image['name'];
        $fileerror = $image['error'];
        $filetmp = $image['tmp_name'];

      
        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));

        $fileextstored = array('png','jpg','jpeg');

        if(in_array($filecheck,$fileextstored)){
            $destinationfile = 'CriminalImageUpdate/'.$filename;
            move_uploaded_file($filetmp, $destinationfile);
        }
    }


   $q = "UPDATE criminal SET criminal_id=$criminal_id, criminal_name='$criminal_name', address='$address', phone_no='$phone_no', age='$age', gender='$gender', image='$destinationfile', city='$city', complain_type='$complain_type' WHERE criminal_id=$criminal_id";

  $query = mysqli_query($con,$q);
  header('location:criminal.php');
}



?>



<!DOCTYPE html>
<html>
<head>
  <title></title>

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
          <h1 class="text-white text-center"> Update Criminal Details Here </h1>

        </div><br>

        <label>Criminal Name </label>
        <input type="text" name="criminal_name" class="form-control"><br>

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

        <label>City </label>
        <input type="text" name="city" class="form-control"><br>

         <label>Complaint Type </label>
        <input type="text" name="complain_type" class="form-control"><br>

        <button class="btn btn-success" type="submit" name="done">Submit</button>
        <br>

       </div>
    </form>

  </div>



</body>
</html>