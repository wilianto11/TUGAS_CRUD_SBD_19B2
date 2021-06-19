<?php
// include database connection file
include("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_suplier'];
	
	$id_suplier=$_POST['id_suplier'];
	$nama_suplier=$_POST['nama_suplier'];
	$alamat=$_POST['alamat'];
	$no_telp=$_POST['no_telp'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE suplier SET id_suplier='$id_suplier',nama_suplier='$nama_suplier',alamat='$alamat',no_telp='$no_telp' 
	WHERE id_suplier=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM suplier WHERE id_suplier=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_suplier = $user_data['id_suplier'];
	$nama_suplier = $user_data['nama_suplier'];
	$alamat = $user_data['alamat'];
	$no_telp = $user_data['no_telp'];
}
?>
<?php include('header_add.php');?>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>ID Suplier</td>
				<td><input type="text" name="id_suplier" value=<?php echo $id_suplier;?>></td>
			</tr>
			<tr> 
				<td>Nama Suplier</td>
				<td><input type="text" name="nama_suplier" value=<?php echo $nama_suplier;?>></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr> 
				<td>No Telp</td>
				<td><input type="text" name="no_telp" value=<?php echo $no_telp;?>></td>
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