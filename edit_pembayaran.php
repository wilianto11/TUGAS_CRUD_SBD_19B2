<?php
// include database connection file
include("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_bayar'];
	
	$id_bayar=$_POST['id_bayar'];
	$id_transaksi=$_POST['id_transaksi'];
	$tgl_bayar=$_POST['tgl_bayar'];
	$total_bayar=$_POST['total_bayar'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE pembayaran SET id_bayar='$id_bayar',id_transaksi='$id_transaksi',tgl_bayar='$tgl_bayar',total_bayar='$total_bayar' 
	WHERE id_bayar=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id_bayar=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_bayar = $user_data['id_bayar'];
	$id_transaksi = $user_data['id_transaksi'];
	$tgl_bayar = $user_data['tgl_bayar'];
	$total_bayar = $user_data['total_bayar'];
}
?>
<?php include('header_add.php');?>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_pembayaran.php">
		<table border="0">
			<tr> 
				<td>ID Pembayaran</td>
				<td><input type="text" name="id_bayar" value=<?php echo $id_bayar;?>></td>
			</tr>
			<tr> 
				<td>ID Transaksi</td>
				<td><input type="text" name="id_transaksi" value=<?php echo $id_transaksi;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Bayar</td>
				<td><input type="text" name="tgl_bayar" value=<?php echo $tgl_bayar;?>></td>
			</tr>
			<tr> 
				<td>Total Bayar</td>
				<td><input type="text" name="total_bayar" value=<?php echo $total_bayar;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html>