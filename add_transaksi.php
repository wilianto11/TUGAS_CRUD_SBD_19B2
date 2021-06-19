<?php include('header_add.php');?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_transaksi.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Transaksi</td>
				<td><input type="text" name="id_transaksi"></td>
			</tr>
			<tr> 
				<td>ID Produk</td>
				<td><input type="text" name="id_produk"></td>
			</tr>
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pembeli"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add Transaksi"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_transaksi = $_POST['id_transaksi'];
		$id_produk = $_POST['id_produk'];
		$id_pembeli = $_POST['id_pembeli'];
		$keterangan = $_POST['keterangan'];
		
		// include database connection file
		include("config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO transaksi(id_transaksi,id_produk,id_pembeli,keterangan) 
        VALUES('$id_transaksi','$id_produk','$id_pembeli','$keterangan')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>