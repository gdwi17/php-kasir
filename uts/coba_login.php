
<?php
session_start();
include 'koneksi.php';

$id=$_POST['id'];
$pasword=$_POST['pasword'];

$login= mysqli_query($con,"select * from user where id='id' and pasword='pasword'");
$cek = mysqli_num_rows($login);

if ($cek>0) {
	$data = mysqli_fetch_assoc($login);

	if ($data['jabatan']=="operator") {
		$_SESSION["id"]= $id;
		$_SESSION["jabatan"]= "operator";
		header('Location:http://localhost/pweb/pweb/uts/pert7-cadangan.php');
	}elseif ($data['jabatan']=="kasir") {
		$_SESSION["id"]= $id;
		$_SESSION["jabatan"]= "kasir";
		header('Location:http://localhost/pweb/pweb/uts/penjualan.php');
		
	}elseif (($data['jabatan']=="manager")) {
		$_SESSION["id"]= $id;
		$_SESSION["jabatan"]="manager";
		header('Location:http://localhost/pweb/pweb/uts/pembelian.php');
		
	}else{
		header('Location:http://localhost/pweb/pweb/uts/login.php');
	}
}

?>