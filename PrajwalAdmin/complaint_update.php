<?php
	
	$con = mysqli_connect('localhost', 'root');

	mysqli_select_db($con, 'fyp_prajwal');

	if(isset($_POST['done'])){

	$complain_id = $_GET['complain_id'];
	$status = $_POST['status'];

	$q = "UPDATE complain SET status='$status' WHERE complain_id=$complain_id";
	
	$query = mysqli_query($con,$q);

	header('Location:complaint.php');
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

		<form method="post">

			<br><br><div class="card">

				<div class="card-header bg-dark">
					<h1 class="text-white text-center"> Update </h1>

				</div><br>

				<!-- <label>Complaint Type </label>
				<input type="text" name="complain_type" readonly class="form-control"><br>

				<label>Time Of Crime </label>
				<input type="text" name="time_of_crime" readonly class="form-control"><br>

				<label>Date Of Crime </label>
				<input type="text" name="date_of_crime" readonly class="form-control"><br>

				<label>Place Of Crime </label>
				<input type="text" name="place_of_crime" readonly class="form-control"><br>

				<label>Crime Description </label>
				<input type="text" name="crime_description" readonly class="form-control"><br> -->

				<!-- <label>Image </label>
				<input type="file" name="image" accept="image/*" readonly  class="form-control"><br> -->

				<label>Status </label>
				<input type="text" name="status" class="form-control"><br>

				<button class="btn btn-success" type="submit" name="done">Submit</button>
				<br>

				<button class="btn btn-danger" type="submit" name="cancel">Back to Complaint</button>
        <br><br>

        <?php
          if(isset($_POST['cancel'])){
              header('location:complaint.php');
            }
            ?>

			 </div>
		</form>

	</div>



</body>
</html>