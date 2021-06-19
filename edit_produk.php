<?php
// include database connection file
include("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_produk'];
	
	$id_produk=$_POST['id_produk'];
	$id_suplier=$_POST['id_suplier'];
	$nama_produk=$_POST['nama_produk'];
	$harga=$_POST['harga'];
    $stok=$_POST['stok'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE produk SET id_produk='$id_produk',id_suplier='$id_suplier',nama_produk='$nama_produk',harga='$harga',stok='$stok' 
	WHERE id_produk=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_produk = $user_data['id_produk'];
	$id_suplier = $user_data['id_suplier'];
	$nama_produk = $user_data['nama_produk'];
	$harga = $user_data['harga'];
    $stok = $user_data['stok'];
}
?>
<?php include('header_add.php');?>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_produk.php">
		<table border="0">
			<tr> 
				<td>ID Produk</td>
				<td><input type="text" name="id_suplier" value=<?php echo $id_produk;?>></td>
			</tr>
			<tr> 
				<td>ID Suplier</td>
				<td><input type="text" name="nama_suplier" value=<?php echo $id_suplier;?>></td>
			</tr>
			<tr> 
				<td>Nama Produk</td>
				<td><input type="text" name="alamat" value=<?php echo $nama_produk;?>></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="no_telp" value=<?php echo $harga;?>></td>
			</tr>
			<tr> 
				<td>Stok</td>
				<td><input type="text" name="stok" value=<?php echo $stok;?>></td>
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