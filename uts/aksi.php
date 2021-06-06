<?php
include 'koneksi.php';
$kode=$_POST['kode_bunga'];
$nama=$_POST['nama'];
$hjual=$_POST['harga_jual'];
$hbeli=$_POST['harga_beli'];
$satuan=$_POST['satuan'];
$stok=$_POST['stok_barang'];

$sqlnya="insert into barang values('$kode','$nama',$hbeli,$hjual,'$satuan',$stok)";

$hasil=mysqli_query($con,$sqlnya);

header('Location:pert7-cadangan.php');
?>