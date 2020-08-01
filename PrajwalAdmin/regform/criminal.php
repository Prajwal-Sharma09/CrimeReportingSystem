<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');


if(isset($_POST['done'])){

    $criminal_name = $_POST['criminal_name'];
    $address = $_POST['address'];
    $phone_no = $_POST['phone_no'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $complain_id = $_POST['complain_id'];
    $court_id = $_POST['court_id'];



    // $complain_type = $_POST['complain_type'];


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
            $destinationfile = '../CriminalImage'.$filename;
            move_uploaded_file($filetmp, $destinationfile);
        }
       
    }


    $q = "INSERT INTO criminal (criminal_name, address, phone_no, age, gender, image, city, complain_id, court_id) VALUES ('$criminal_name','$address','$phone_no','$age','$gender','$destinationfile','$city','$complain_id', '$court_id')";

  $query = mysqli_query($con,$q);

  // $last_id = mysqli_insert_id($con);


  // $q2 = "INSERT INTO criminal_complain (criminal_id,complain_id, criminal_name, complain_type) VALUES ('$criminal_id','$complain_id', '$criminal_name', '$complain_type')";
  // $query2 = mysqli_query($con,$q2);


  header('location:../criminal.php');


  
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
          <h1 class="text-white text-center"> Enter Criminal Details Here </h1>

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

         <label>Complaint Id </label>
        <input type="text" name="complain_id" class="form-control"><br>

        <label>Court Id </label>
        <input type="text" name="court_id" class="form-control"><br>

                                                      <!-- <div class="label">Complaint ID:</div>

                                                  <select name="names">
                                                  <option value = "">---Select---</option>
                                                  <?php
                                                  $queryusers = "SELECT complain_id FROM complain";
                                                  $db = mysqli_query($queryusers);
                                                  while ( $d=mysqli_fetch_assoc($db)) {
                                                    echo "<option value='{".$d['complain_id']."}'></option>";
                                                  }
                                                  ?>
                                                    </select>  
                                                    <br> -->

       <!--  <select name="complain_id" class="form-control" required></select>
        <option value="">Select</option>

        <?php

             $sql = "SELECT complain_id FROM complain";





         ?> -->

        <!-- <select name="complain_id" class="form-control">
          //for each loop
          <option value="">asdaasd</option>
        </select>
        <br> -->

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