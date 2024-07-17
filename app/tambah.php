<?php 

  // set default time zone
  date_default_timezone_set("Asia/Makassar");
  $waktu = date("d / M - Y,  H:i");

  // connect database
  require "../logic/connect.php";
  require "../logic/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Barang</title>

  <link rel="stylesheet" href="css/tambah.css" />

  <!-- icons google -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!-- css bootstrap -->
  <link rel="stylesheet" href="../bootstrap_533/css/bootstrap.min.css" />

  <!-- my css -->
  <link rel="stylesheet" href="../style.css" />

</head>
<body>

  <nav>
    <div class="judul">
      <h1>
        <a href="#">Belajar GIT dan PHP</a>
      </h1> 
    </div>

    <div class="waktu">
      <?= $waktu ?>
    </div>
  </nav>

  <div class="container mt-4 shadow-sm p-5" style="width: 60%;">
    <div class="row">
      <div class="col">
        <h2 class="fs-3">Tambah Barang</h2>
      </div>
    </div>

    <form action="" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama barang..." required>
      </div>

      <div class="mb-3">
        <label for="kategori">Kategori Barang</label>
        <select class="form-select" aria-label="Default select example" id="kategori" required>
          <option selected>Pilih kategori...</option>
          <option value="Biografi">Makanan dan Minuman</option>
          <option value="Cerita Pendek">Bahan Pokok</option>
          <option value="Ilmu Pengetahuan">Bumbu Dapur </option>
          <option value="Pembelajaran">Produk Susu</option>
          <option value="Sejarah">Produk Kebersihan dan Kesehatan</option>
          <option value="Teknologi">Korek Api</option>
          <option value="Fiksi Ilmiah">Alat Tulis</option>
          <option value="Novel">Ice Cream</option>
          <option value="Novel">Obat Obatan</option>
          <option value="Novel">Permen</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="nama" class="form-label">Harga Barang</label>
        <input type="number" class="form-control" id="nama" placeholder="Masukkan harga barang..." required>
      </div>

      <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi Barang</label>
        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deksripsi barang..."></textarea>
      </div>

      <div class="ms-auto">
        <button type="submit" name="tambah" class="btn btn-info">Tambah</button>
        <button type="reset" class="btn btn-warning">Batal</button>
      </div>
    </form>
  </div>

  <!-- js boostrap -->
  <script src="../bootstrap_533/js/bootstrap.min.js"></script>
</body>
</html>