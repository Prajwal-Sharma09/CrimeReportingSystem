<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Police Table</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									May 2019
								</a>
								<!-- <div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<!-- <h5 class="text-blue">Data Table Simple</h5>
							<p class="font-14">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p> -->
						</div>
					</div>
					<div class="row">
						<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">User Id</th>
									<th> User Name</th>
							        <th> Address </th>
							        <th> Phone Number </th>
							        <th> Age </th>
							        <th> Gender </th>
							        <th> Email  </th>
							        <th> Citizenship Number  </th>
							        <th> Image  </th>
							        <th> Delete </th>	
								</tr>
							</thead>
							 <?php

    $con = mysqli_connect('localhost', 'root');

    mysqli_select_db($con, 'fyp_prajwal');
 
    $q = "SELECT user_id, user_name, address, phone_no, age, gender, email,  citizenship_no, image from user where status = '1'";

    $query = mysqli_query($con,$q);

    while ($res = mysqli_fetch_array($query)){


?>

<tr class="text-center">
        <td> <?php echo $res['user_id'];  ?>  </td>
        <td> <?php echo $res['user_name'];  ?>  </td>
        <td> <?php echo $res['address'];  ?>  </td>
        <td> <?php echo $res['phone_no'];  ?>  </td>
        <td> <?php echo $res['age'];  ?>  </td>
        <td> <?php echo $res['gender'];  ?>  </td>
        <td> <?php echo $res['email'];  ?>  </td>
        <td> <?php echo $res['citizenship_no'];  ?>  </td>

        <?php 
          if($res['image'] == ''){
        ?>
          <td>NULL</td>
        <?php
          }else{
        ?>
        <td> <img src="../../final/User/<?php echo $res['image'];  ?>"
                height="100px" width="100px"> </td>
        <?php
          }
        ?>

        <td> <button class="btn btn-danger"> <a href="user_delete.php?user_id=<?php echo $res['user_id']; ?>" class="text-white"> Delete </a> </button> </td>
        
        <!-- <td> <button class="btn btn-secondary"> <a href="update.php?complain_id=<?php echo $res['complain_id']; ?>" class="text-white"> Update </a> </button> </td>
      </tr> -->

      <?php
    }

    ?>

							<!-- <tbody>
								<tr>
									<td class="table-plus">Gloria F. Mead</td>
									<td>25</td>
									<td>Sagittarius</td>
									<td>2829 Trainer Avenue Peoria, IL 61602 </td>
									<td>29-03-2018</td>
									
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>30</td>
									<td>Gemini</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
									<td>29-03-2018</td>
									
								</tr>
								
							</tbody> -->
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
				
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
	<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			$('.data-table-export').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'pdf', 'print'
				]
			});
			var table = $('.select-row').DataTable();
			$('.select-row tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			var multipletable = $('.multiple-select-row').DataTable();
			$('.multiple-select-row tbody').on('click', 'tr', function () {
				$(this).toggleClass('selected');
			});
		});
	</script>
</body>
</html>