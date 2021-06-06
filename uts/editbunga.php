<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf.8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Hello kawan</title>
  </head>
  <body>

<div class="alert alert-primary" role="alert">
  <h1><p align="center"><img src="1.png"idth="30" height="60" alt="">Toko Flowersar</p></h1>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="pert7-cadangan.php">Barang <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="karyawan.php">Karyawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="supliyer.php">Supplier</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transaksi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="penjualan.php">Penjualan</a>
          <a class="dropdown-item" href="pembelian.php">Pembelian</a>
        </div>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="laporanstok.php">Stok</a>
          <a class="dropdown-item" href="laporanpenjualan.php">Penjualan</a>
          <a class="dropdown-item" href="lppembelian.php">Pembelian</a>
        </div>
        </li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-sm-6">
<p align="center"><h5>Edit </h5></p>

<?php
        include 'koneksi.php';
        $query = mysqli_query($con, "select * from barang where kode_bunga = '".$_GET['kode_bunga']."';");
        $data = mysqli_fetch_array($query);
        ?>
        <form action="ko_edit.php" method="POST">
            <table>
                <tr>
                    <td>Kode bunga</td>
                    <td><input type="text" name="kode_bunga" value="<?php echo $data['kode_bunga']; ?>" readonly=""></td>
                </tr>
                <tr>
                    <td>Nama Bunga</td>
                    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td><input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input type="text" name="harga_beli" value="<?php echo $data['harga_beli']; ?>"></td>
                </tr>
                <tr>
                    <td>Satuan</td>
                    <td><input type="text" name="satuan" value="<?php echo $data['satuan']; ?>"></td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td><input type="text" name="diskon" value="<?php echo $data['diskon']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>
        </form>

</div>
</div>
<!--batas-->
    

</body>
</html>