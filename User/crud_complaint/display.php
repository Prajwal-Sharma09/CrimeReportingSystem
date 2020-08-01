

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

	

	<div class="container">
	<div class="col-lg-12">
		<br><br>
		<!-- <h1 class="text-warning text-center"> Display Table Data </h1> -->
		<br>
		<table class=" table table-striped table-hover table-bordered">

			<tr class="bg-dark text-white text-center">

				<th> Complaint ID  </th>
				<th> Complaint Type </th>
				<th> Time Of Crime </th>
				<th> Date Of Crime </th>
				<th> Place Of Crime </th>
				<th> Crime Description </th>
				<th> Image  </th>
				<th> Status  </th>
				<th> Delete </th>
				<th> Update  </th>
			</tr>

 <?php

		include 'conn.php';
		session_start();
		$user_id=$_SESSION['user_id'];
		$q = "SELECT * from complain c join user_complain uc ON uc.complain_id = c.complain_id JOIN user u On u.user_id = uc.user_id Where uc.user_id = '$user_id'";

		$query = mysqli_query($con,$q);

		while ($res = mysqli_fetch_array($query)){



	?> 

			<tr class="text-center">
				<td> <?php echo $res['complain_id'];  ?>  </td>
				<td> <?php echo $res['complain_type'];  ?>  </td>
				<td> <?php echo $res['time_of_crime'];  ?>  </td>
				<td> <?php echo $res['date_of_crime'];  ?>  </td>
				<td> <?php echo $res['place_of_crime'];  ?>  </td>
				<td> <?php echo $res['crime_description'];  ?>  </td>
		
				

				<?php 
                if($res['image'] == ''){
       			 ?>
			    <td>NULL</td>
			        <?php
			          }else{
			        ?>
        <td> <img src="<?php echo $res['image'];  ?>"
                height="100px" width="100px"> </td>

                <td> <?php echo $res['status'];  ?>  </td>
        <?php
          }
        ?>				

				<td> <button class="btn btn-danger"> <a href="delete.php?complain_id=<?php echo $res['complain_id']; ?>" class="text-white"> Delete </a> </button> </td>
				
				<td> <button class="btn btn-secondary"> <a href="update.php?complain_id=<?php echo $res['complain_id']; ?>" class="text-white"> Update </a> </button> </td>
			</tr>

		<?php
		}

		?>

		</table>


	</div>
	</div>


</body>
</html>
