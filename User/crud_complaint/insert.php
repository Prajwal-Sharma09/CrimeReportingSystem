<?php

include 'conn.php';

session_start();

if(isset($_POST['done'])){
	$user_id = $_SESSION['user_id'];
	$complain_type = $_POST['complain_type'];
    $time_of_crime = $_POST['time_of_crime'];
  	$date_of_crime = $_POST['date_of_crime'];
 	$place_of_crime = $_POST['place_of_crime'];
  	$crime_description = $_POST['crime_description'];
  	
  	

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
	  		$destinationfile = 'ImageUpload/'.$filename;
	  		move_uploaded_file($filetmp, $destinationfile);
	  	}

	  	$status = $_POST['status'];
	}



		$q = "INSERT INTO complain (complain_type, time_of_crime, date_of_crime, place_of_crime, crime_description, image, status) VALUES ('$complain_type','$time_of_crime','$date_of_crime','$place_of_crime', '$crime_description', '$destinationfile', '$status')";


	$query = mysqli_query($con,$q);
	$last_id = mysqli_insert_id($con);

	$q2 = "INSERT INTO user_complain (user_id,complain_id) VALUES ('$user_id','$last_id')";
	$query2 = mysqli_query($con,$q2);

	header('location:display.php');
	
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
					<h1 class="text-white text-center"> Register your Complaint </h1>

				</div><br>

				<label>Complaint Type </label>
				<input type="text" name="complain_type" required class="form-control"><br>

				<label>Time Of Crime </label>
				<input type="text" name="time_of_crime" required class="form-control"><br>

				<label>Date Of Crime </label>
				<input type="text" name="date_of_crime" required class="form-control"><br>

				<label>Place Of Crime </label>
				<input type="text" name="place_of_crime" required class="form-control"><br>

				<label>Crime Description </label>
				<input type="text" name="crime_description" required class="form-control"><br>

				<label>Image </label>
				<input type="file" name="image" accept="image/*"  class="form-control"><br>

				<button class="btn btn-success" type="submit" name="done">Submit</button>
				<br>

			 </div>
		</form>

	</div>



</body>
</html>