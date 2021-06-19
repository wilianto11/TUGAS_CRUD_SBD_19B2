<?php include('header_add.php');?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_pembayaran.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Pembayaran</td>
				<td><input type="text" name="id_bayar"></td>
			</tr>
			<tr> 
				<td>ID Transaksi</td>
				<td><input type="text" name="id_transaksi"></td>
			</tr>
			<tr> 
				<td>Tanggal bayar</td>
				<td><input type="text" name="tgl_bayar"></td>
			</tr>
			<tr>
				<td>Total Bayar</td>
				<td><input type="text" name="total_bayar"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add Pembayaran"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_bayar = $_POST['id_bayar'];
		$id_transaksi = $_POST['id_transaksi'];
		$tgl_bayar = $_POST['tgl_bayar'];
		$total_bayar = $_POST['total_bayar'];
		
		// include database connection file
		include("config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO pembayaran(id_bayar,id_transaksi,tgl_bayar,total_bayar) 
        VALUES('$id_bayar','$id_transaksi','$tgl_bayar','$total_bayar')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>