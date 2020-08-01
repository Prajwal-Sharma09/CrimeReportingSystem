
<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');

if(isset($_POST['register-user'])){

	$user_name =  $_POST['user_name'];
	$address =  $_POST['address'];
	$phone_no =  $_POST['phone_no'];
	$age =  $_POST['age'];
	$gender =  $_POST['gender'];
	$email =  $_POST['email'];
	$password =  $_POST['password'];
	$citizenship_no =  $_POST['citizenship_no'];

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
	  		$destinationfile = 'UserImage/'.$filename;
	  		move_uploaded_file($filetmp, $destinationfile);
	  	}
	}

	$q = "INSERT INTO user (user_name,address,phone_no,age,gender,email,password,citizenship_no,image) VALUES ('$user_name', '$address', '$phone_no', '$age','$gender','$email', '$password', '$citizenship_no', '$destinationfile')";

	$query = mysqli_query($con,$q);
	header('Location:index.php');
}



?>





