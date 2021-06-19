<?php include('header_add.php');?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_produk.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Produk</td>
				<td><input type="text" name="id_produk"></td>
			</tr>
			<tr> 
				<td>ID Suplier</td>
				<td><input type="text" name="id_suplier"></td>
			</tr>
			<tr> 
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
            <tr>
				<td>Stok</td>
				<td><input type="text" name="stok"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add Produk"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_produk = $_POST['id_produk'];
		$id_suplier = $_POST['id_suplier'];
		$nama_produk = $_POST['nama_produk'];
		$harga = $_POST['harga'];
        $stok = $_POST['stok'];
		
		// include database connection file
		include("config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO produk(id_produk,id_suplier,nama_produk,harga,stok) 
		VALUES('$id_produk','$id_suplier','$nama_produk','$harga','$stok')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>