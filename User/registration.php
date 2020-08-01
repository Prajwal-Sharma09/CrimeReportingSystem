<html>
<head>
<title>User Registration</title>
<style>
body{
  width:610px;
  margin-left: 25%;
  margin-right:25%;
  width: 50%;
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
  padding: 15px 0px;
}
.demoInputBox {
  padding: 10px 30px;
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
</head>
<body>

<form name="formRegistration" method="POST" enctype="multipart/form-data" action="registrationDB.php">
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
<td>User Name</td>
<td><input type="text" class="demoInputBox" name="user_name" required value="<?php if(isset($_POST['user_name'])) echo $_POST['user_name']; ?>"></td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" class="demoInputBox" name="address" required value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>"></td>
</tr>

<tr>
<td>Phone Number</td>
<td><input type="text"  class="demoInputBox" name="phone_no" required pattern="[6789][0-9]{9}" minlength="10" maxlength="10" required value="<?php if(isset($_POST['phone_no'])) echo $_POST['phone_no']; ?>"></td>
</tr>

<tr>
<td>Age</td>
<td><input type="number" min="16" minlength="10" maxlength="10" class="demoInputBox" name="age" required value="<?php if(
isset($_POST['age'])) echo $_POST['age']; ?>"></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="Male" required  <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
<input type="radio" name="gender" value="Female" required <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
</td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" class="demoInputBox" required name="email" > </td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" placeholder="6 Character minimum" pattern=".{6,}" required value=""></td>
</tr>

<tr>
<td>Citizenship Number</td>
<td><input type="text" class="demoInputBox" name="citizenship_no"  minlength="10" maxlength="10" required value=""></td>
</tr>

<tr>
<td>Image</td>
<td><input type="file" name="image"  accept="image/*">
</tr>

<tr>
<td colspan=2>
<input type="checkbox" name="terms" required> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" required class="btnRegister"></td>
</tr>
</table>
</form>
</body>  