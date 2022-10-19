<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
if(isset($_POST['submit'])){
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$sid=$_POST['staff_id'];
$postal=$_POST['postal_address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$pas=$_POST['password'];
$ph_id = $_POST['ph_id'];

// get value of id that sent from address bar
// $user=$_POST['user'];

// Retrieve data from database
$sql="UPDATE pharmacist SET first_name='$fname', last_name='$lname', staff_id='$sid',
postal_address='$postal',phone='$phone',email='$email',username='$username', password='$pas' WHERE pharmacist_id ='$ph_id'"; 

mysqli_query($con, $sql);

if(mysqli_affected_rows($con)>0) {header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin.php");
}else{
$message1="<font color=red>Update Failed, Try again</font>";
}}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php $username?> Pharmacy Management System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
<script src="js/function.js" type="text/javascript"></script>
 <style>#left-column {height: 477px;}
 #main {height: 477px;}</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="images/hd_logo.jpg"></a> Pharmacy Management System</h1></div>
<div id="left_column">
<div id="button">
<ul>
			<li><a href="admin.php">Dashboard</a></li>
			<li><a href="admin_pharmacist.php">Pharmacist</a></li>
			<li><a href="admin_manager.php">Manager</a></li>
			<li><a href="admin_cashier.php">Cashier</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
</div>
		</div>
<div id="main">
<div id="tabbed_box" class="tabbed_box">
    <h4>Manage Users</h4>
<hr/>
    <div class="tabbed_area">

        <ul class="tabs">
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">Update User</a></li>

        </ul>

        <div id="content_1" class="content">
		<?php echo $message1;?>

		<?php
		// select Query
			$ph_id = $_GET['ph_id'];
			$sql = "SELECT * FROM pharmacist WHERE pharmacist_id='$ph_id'";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_assoc($result);
		 ?>

          <form name="myform" onsubmit="return validateForm(this);" action="" method="post" >
			<table width="420" height="106" border="0" >
				<tr>
					<td align="center">
						<input name="first_name" type="text" style="width:170px" placeholder="First Name" value="<?php  echo $row['first_name']?>" id="first_name" />
					</td>
				</tr>
				<tr><td align="center"><input name="last_name" type="text" style="width:170px" placeholder="Last Name" id="last_name" value="<?php  echo $row['last_name']?>" /></td></tr>
				<tr><td align="center"><input name="staff_id" type="text" style="width:170px" placeholder="Staff ID" id="staff_id" value="<?php  echo $row['staff_id']?>" /></td></tr>
				<tr><td align="center"><input name="postal_address" type="text" style="width:170px" placeholder="Address" id="postal_address" value="<?php  echo $row['postal_address']?>" /></td></tr>
				<tr><td align="center"><input name="phone" type="text" style="width:170px" placeholder="Phone" id="phone" value="<?php  echo $row['phone']?>" /></td></tr>

				<tr><td align="center"><input name="email" type="email" style="width:170px" placeholder="Email" id="email"value="<?php  echo $row['email']?>" /></td></tr>
				<tr><td align="center"><input name="username" type="text" style="width:170px" placeholder="Username" id="username"value="<?php  echo $row['username']?>" /></td></tr>
				<tr><td align="center"><input name="password" placeholder="Password" id="password"value="<?php  echo $row['password']?>"type="password" style="width:170px"/></td></tr>
				<tr><td align="center"><input name="submit" type="submit" value="Update"/></td></tr>
            </table>

			<input type="hidden" name="ph_id" value="<?php echo $ph_id;  ?>" >
		</form>
		</div>
    </div>
</div>
</div>
<div id="footer" align="Center"> Pharmacy System 2020 Copyright All Rights Reserved</div>
</div>
</body>
</html>
