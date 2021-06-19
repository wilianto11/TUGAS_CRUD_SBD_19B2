<?php
// include database connection file
include("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_transaksi'];
	
	$id_transaksi=$_POST['id_transaksi'];
	$id_produk=$_POST['id_produk'];
	$id_pembeli=$_POST['id_pembeli'];
	$keterangan=$_POST['keterangan'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE transaksi SET id_transaksi='$id_transaksi',id_produk='$id_produk',id_pembeli='$id_pembeli',keterangan='$keterangan' 
	WHERE id_transaksi=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_transaksi = $user_data['id_transaksi'];
	$id_produk = $user_data['id_produk'];
	$id_pembeli = $user_data['id_pembeli'];
	$keterangan = $user_data['keterangan'];
}
?>
<?php include('header_add.php');?>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_transaksi.php">
		<table border="0">
			<tr> 
				<td>ID Transaksi</td>
				<td><input type="text" name="id_transaksi" value=<?php echo $id_transaksi;?>></td>
			</tr>
			<tr> 
				<td>ID Produk</td>
				<td><input type="text" name="id_produk" value=<?php echo $id_produk;?>></td>
			</tr>
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pembeli" value=<?php echo $id_pembeli;?>></td>
			</tr>
			<tr> 
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
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