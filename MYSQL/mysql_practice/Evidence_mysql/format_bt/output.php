<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
 <div class="container">
	<div class="row">
	
	<!-- Manufacturer  -->
		<div class="col-md-4">


		 <hr> <h2 style="text-align: center;"> Manufacturers </h2> <hr> 

			<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam');  ?>

			<?php 
				// Delete Trigger
				if(isset($_POST['submit'])){
					$id  = $_POST['manu_id'];
					$sql = "DELETE FROM manufacturer WHERE id = '$id'";
					$db->query( $sql);

					if($db->affected_rows>0){
						echo "Deleted";
					}
				}

			?>

			<?php 
				// Entry manufacturer By Procedure
				if(isset($_POST['manufacturer_submit'])){
					extract($_POST);
					
					$sql = "CALL add_manufacturer('$manu_nm', '$manu_add', '$manu_ph')";
					$db->query( $sql);

					if($db->affected_rows>0){
						echo "Added.";
					}
				}

			?>


			<!-- Show List Manufacturer -->
			<form action="" method="post">
				<select name="manu_id">

				<option value="" disabled selected > Select one</option>

					<?php 
						$sql = "SELECT * FROM manufacturer ";
						$result = $db->query($sql);

						while($row = $result->fetch_assoc()){
					?>

					<option value="<?php echo $row['id'] ?>">
						<?php echo $row['name'] ?> 
					</option>
						
					
					<?php 
						} 
					?>
				</select>

				<input type="submit" name="submit" value="DELETE">
			</form>

			<!-- Manufacturer Entry -->
			<h2>Manufacturer Entry</h2>

			<form action="" method="post">
				<input type="text" name="manu_nm" placeholder="Enter Manufacturer"> <br>
				<input type="text" name="manu_add" placeholder="Enter Address"> <br>
				<input type="text" name="manu_ph" placeholder="Enter Phone"> <br> <br>
				<input type="submit" name="manufacturer_submit" value="SAVE Manufacturer"> <br>
			</form>


			<br><br>



		</div>


	 <!-- Show Manu -->
		<div class="col-md-4">

			<hr> <h2 style="text-align: center;">  Manufacturer List </h2> <hr> 

			<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam');  ?>

			<table border="1">
				<tr>
					<th>ID</th>
					<th>Manufacturer Name</th>
					<th>Address</th>
					<th>Contact No</th>
				</tr>

				<?php 

					$sql = "SELECT * FROM manufacturer";
					$result = $db->query($sql);

					while($row = $result->fetch_assoc()){
				?>

				<tr>
					<td> <?php echo $row['id'] ?> </td>
					<td> <?php echo $row['name'] ?> </td>
					<td> <?php echo $row['address'] ?> </td>
					<td> <?php echo $row['contact_no'] ?> </td>
				
				</tr>

				<?php 
					} 
				?>

					</table> <br><br>

		</div>

	<!-- Show Product   -->
		<div class="col-md-4">

			<hr> <h2 style="text-align: center;">  Products List </h2> <hr> 

			<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam');  ?>

			<table border="1">
			<tr>
				<th>ID</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Manufacturer</th>
			</tr>

			<?php 

				$sql = "SELECT * FROM product_info_view";
				$result = $db->query($sql);

				while($row = $result->fetch_assoc()){
			?>

			<tr>
				<td> <?php echo $row['id'] ?> </td>
				<td> <?php echo $row['product_name'] ?> </td>
				<td> <?php echo $row['price'] ?> </td>
				<td> <?php echo $row['manufacturer_name'] ?> </td>
			
			</tr>

			<?php 
				} 
			?>

			</table> <br><br>

		</div>
	</div>
 </div>

	
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>