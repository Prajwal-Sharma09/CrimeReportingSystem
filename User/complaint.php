<!-- <?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'fyp_prajwal');


if(isset($_POST['register-user'])){

  $complain_type = $_POST['complain_type'];
  $time_of_crime = $_POST['time_of_crime'];
  $date_of_crime = $_POST['date_of_crime'];
  $place_of_crime = $_POST['place_of_crime'];
  $crime_description = $_POST['crime_description'];
  $image = $_POST['image'];


  $q = "INSERT INTO complain (complain_type, time_of_crime, date_of_crime, place_of_crime, crime_description, image) VALUES ('$complain_type','$time_of_crime','$date_of_crime','$place_of_crime', '$crime_description', '$image')";

  $query = mysqli_query($con,$q);
 
  if(mysqli_num_rows($query)==0)
        {
             $message = "Id or Password not Matched.";
             echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else 
        {
          header("location:index.php");
        }
}


?>
 -->


<!DOCTYPE html>
<html>
<head>
<body>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


<title>Complaint Page</title>
</head>
</body>
<style>
body{
  width: 610px;
  margin-left:25%;
  margin-right:25%;
  width:50%;
  background-image: url(back.jpg);
  font-family:calibri;

}
.error-message {
  padding: 7px 10px;
  background: #fff1f2;
  border: #ffd5da 1px solid;
  color: #d6001c;
  border-radius: 4px;
}
.success-message {
  padding: 7px 10px;
  background: #cae0c4;
  border: #c3d0b5 1px solid;
  color: #027506;
  border-radius: 4px;
}
.demo-table {
  background: #d9eeff;
  width: 100%;
  border-spacing: initial;
  margin: 2px 0px;
  word-break: break-word;
  table-layout: auto;
  line-height: 1.8em;
  color: #333;
  font-weight: bold;
  border-radius: 4px;
  padding: 20px 40px;
}
.demo-table td {
  padding: 10px 0px;
}
.demoInputBox {
  padding: 10px 40px;
  border: #a9a9a9 1px solid;
  border-radius: 4px;
}
.btnRegister {
  padding: 10px 30px;
  background-color: #3367b2;
  border: 0;
  color: yellow;
  cursor: pointer;
  border-radius: 4px;
  margin-left: 100px;
}
</style>

<body style="background-size: cover;
             padding-top: 80px;
             padding-left: 20px;
             background-position: center;">
	<nav class="navbar navbar-default navbar-fixed-top" style="height: 60px;">
  <div class="container">
    <div class="navbar-header">
     
      <a class="navbar-brand" href="index.php" style="margin-top: 5%;"><b>Crime File Reporting System</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active" style="margin-top: 5%;"><a href="complaint.php">Complaint Here</a></li>
      </ul>
    </div>
  </div>
 </nav>
</body>
 <body>

<form name="formComplaint" method="POST" action="complaintDB.php">
<table border="0" width="500" align="center" class="demo-table">

<!-- 
<?php if(!empty($success_message)) { ?> 
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?> 
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
-->

<tr>
<td>Complain Type</td>
<td><input type="text" class="demoInputBox" name="complain_type" required value="<?php if(isset($_POST['complain_type'])) echo $_POST['complain_type']; ?>"></td>
</tr>

<tr>
<td>Time Of Crime</td>
<td><input type="text" class="demoInputBox" name="time_of_crime" required value="<?php if(isset($_POST['time_of_crime'])) echo $_POST['time_of_crime  ']; ?>"></td>
</tr>

<tr>
<td>Date Of Crime</td>
<td><input type="text" class="demoInputBox" name="date_of_crime" required value="<?php if(isset($_POST['date_of_crime'])) echo $_POST['date_of_crime']; ?>"></td>
</tr>

<tr>
<td>Place Of Crime</td>
<td><input type="text" class="demoInputBox" name="place_of_crime" required value="<?php if(isset($_POST['place_of_crime'])) echo $_POST['place_of_crime']; ?>"></td>
</tr>

<tr>
<td>Crime Description</td>
<td><input type="text" class="demoInputBox" name="crime_description" required value="<?php if(isset($_POST['crime_description'])) echo $_POST['crime_description']; ?>"></td>
</tr>

<tr>
<td>Image</td>
<td><input type="file" name="pic" accept="image/*">
</tr>

<tr>
<td colspan=2>
 <input type="submit" name="register-user" value="Register" required class="btnRegister"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</form>
</body>



