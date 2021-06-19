<?php include('header_add.php');?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Suplier</td>
				<td><input type="text" name="id_suplier"></td>
			</tr>
			<tr> 
				<td>Nama Suplier</td>
				<td><input type="text" name="nama_suplier"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>No telp</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add Suplier"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_suplier = $_POST['id_suplier'];
		$nama_suplier = $_POST['nama_suplier'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		
		// include database connection file
		include("config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO suplier(id_suplier,nama_suplier,alamat,no_telp) 
		VALUES('$id_suplier','$nama_suplier','$alamat','$no_telp')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>