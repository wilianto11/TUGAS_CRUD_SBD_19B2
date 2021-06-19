<?php
// include database connection file
include("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_pembeli'];
	
	$id_pembeli=$_POST['id_pembeli'];
	$nama_pembeli=$_POST['nama_pembeli'];
	$jk=$_POST['jk'];
	$no_telp=$_POST['no_telp'];
    $alamat=$_POST['alamat'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE pembeli SET id_pembeli='$id_pembeli',nama_pembeli='$nama_pembeli',jk='$jk',no_telp='$no_telp,alamat='$alamat' 
	WHERE id_pembeli=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM pembeli WHERE id_pembeli=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_pembeli = $user_data['id_pembeli'];
	$nama_pembeli = $user_data['nama_pembeli'];
	$jk = $user_data['jk'];
	$no_telp = $user_data['no_telp'];
    $alamat = $user_data['alamat'];
}
?>
<html>
<?php include('header_add.php');?>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_pembeli.php">
		<table border="0">
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pembeli" value=<?php echo $id_pembeli;?>></td>
			</tr>
			<tr> 
				<td>Nama Pembeli</td>
				<td><input type="text" name="nama_pembeli" value=<?php echo $nama_pembeli;?>></td>
			</tr>
			<tr> 
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk" value=<?php echo $jk;?>></td>
			</tr>
			<tr> 
				<td>No Telp</td>
				<td><input type="text" name="no_telp" value=<?php echo $no_telp;?>></td>
			</tr>
            <tr> 
				<td>alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html>