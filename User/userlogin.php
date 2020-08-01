 <!DOCTYPE html>
<html>
<head>
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
    // $conn = mysqli_select_db("fyp_prajwal",$conn);
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST['email'];
        $pass=$_POST['password'];

        $result=mysqli_query($conn,"SELECT email,password,user_id FROM user where email='".$name."' and password='".$pass."'");


        // $result=mysqli_query($conn,"SELECT email, password FROM user");

        // echo $name ."</br>".$pass ;

        // $data = mysqli_fetch_assoc($result);
        // print_r($data);

        // exit();
       
          // $u_id=$_POST['email'];
          // $_SESSION['u_id']=$u_id;
   
        // echo mysqli_num_rows($result);
        // exit();
        if(mysqli_num_rows($result)==0)
        {
             $message = "Id or Password not Matched.";
             echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else 
        {
          while ($row=mysqli_fetch_array($result)) {
            $_SESSION['user_id'] = $row['user_id'];
          }
          header("location:redirect/redirect.php");
        }
    }                
}
?> 



	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
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
    
	<title>User Login</title>
</head>
<body style="background-size: cover;
    background-image: url(back.jpg);
    background-position: center;">
	<nav class="navbar navbar-default navbar-fixed-top" style="height: 60px;">
  <div class="container">
    <div class="navbar-header">
     
      <a class="navbar-brand" href="index.php" style="margin-top: 5%;"><b>Logout</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active" style="margin-top: 5%;"><a href="userlogin.php">User Login</a></li>
      </ul>
    </div>
  </div>
 </nav>

 <div  align="center" >
	<div class="form" style="margin-top: 15%">
		<form method="post">
  <div class="form-group" style="width: 30%">
    <label for="exampleInputEmail1"><h1 style="color: #fff;">Email ID</h1></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" size="5" placeholder="Enter Email id" required name="email" onfocusout="f1()">
     </div>
  <div class="form-group" style="width:30%">
    <label for="exampleInputPassword1"><h1 style="color: #fff;">Password</h1></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="password" onfocusout="f1()">
  </div>
  
  <button type="submit" class="btn btn-primary" name="s" onclick="f1()">Submit</button>
</form>
	</div>
</div>
<div style="position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgba(0,0,0,0.7);
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>Crime File Reporting System</b></h4>
</div>

</body>
</html>