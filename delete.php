<?php
// include database connection file
include("config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
// Delete table suplier
$result = mysqli_query($conn, "DELETE FROM suplier WHERE id_suplier=$id");
// Delete table produk
$result = mysqli_query($conn, "DELETE FROM produk WHERE id_produk=$id");
// Delete table pembeli
$result = mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli=$id");
// Delete table transaksi
$result = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi=$id");
// Delete table pembayaran
$result = mysqli_query($conn, "DELETE FROM pembayaran WHERE id_bayar=$id");
// After delete redirect to Home, so that latest user list will be displayed.a

header("Location: index.php");
?>