<?php
include 'config.php';

$kodetr = $_POST['kodetgl'];
$tgl = $_POST['tgl'];
// $nama = $_POST['nama'];
// $alamat = $_POST['alamat'];
// $tlp = $_POST['tlp'];
// $ket = $_POST['ket'];
$kode = $_POST['kode'];
$nama_barang = $_POST['nama'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$jml = $_POST['jml'];
$total = $harga*$jml;


$query = "INSERT INTO detail_penjualan VALUES('$kodetr', '$tgl', '$kode', '$nama_barang', '$satuan', '$jml', '$harga', '$total' )";
$succes = mysqli_query($conn, $query);


if ($succes) {
    header('location: tugas.php');
} else {
    echo mysqli_error($con);
}
mysqli_close($con);
