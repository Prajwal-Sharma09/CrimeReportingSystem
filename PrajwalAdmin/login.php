  <?php
  if(isset($_POST['s']))
    {
    session_start();
    $_SESSION['x']=1;
    $conn=mysqli_connect("localhost","root","","fyp_prajwal");
    if(!$conn)
    {
        die("could not connect".mysql_error());
      }

      if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST['email'];
        $pass=$_POST['password'];

        $result=mysqli_query($conn,"SELECT email,password FROM police where email='".$name."' and password='".$pass."'");

         if(mysqli_num_rows($result)==0)
        {
             $message = "Id or Password not Matched.";
             echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else 
        {
          header("location:index.php");
        }
    }                
}
?> 
 <script>
     function f1()
        {
            var sta2=document.getElementById("exampleInputEmail1").value;
            var sta3=document.getElementById("exampleInputPassword1").value;
          var x2=sta2.indexOf(' ');
var x3=sta3.indexOf(' ');
    if(sta2!="" && x2>=0){
    document.getElementById("exampleInputEmail1").value="";
    document.getElementById("exampleInputEmail1").focus();
      alert("Space Not Allowed");
        }
        else if(sta3!="" && x3>=0){
    document.getElementById("exampleInputPassword1").value="";
    document.getElementById("exampleInputPassword1").focus();
      alert("Space Not Allowed");
        }

}
    </script>


<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?> 
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/login-img.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Login</h2>
			<form>
				<div class="input-group custom input-group-lg">
					<input type="text" name="email" class="form-control" placeholder="Username">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" name="password" class="form-control" placeholder="**********">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
							<a class="btn btn-outline-primary btn-lg btn-block" name="s">Sign In</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="forgot-password padding-top-10"><a href="forgot-password.php">Forgot Password</a></div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>