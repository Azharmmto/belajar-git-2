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

  <main>
    <form action="" method="post">
      <div class="label">
        <label for="nama">Nama Barang</label>
        <input type="text" id="nama" name="nama" required />
      </div>

      <div class="label-select">
        <label for="kategori">Kategori Barang</label>
        <select id="kategori"> 
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
          <option value="Novel">Gula-gula</option>
        </select>
      </div>

      <div class="label">
        <label for="harga">Harga Barang</label>
        <input type="number" id="harga" name="harga" required />
      </div>

      <div class="label">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
      </div>

      <div class="tombol">
        <button type="submit" name="tambah">Tambah</button>
        <button type="reset">Batal</button>
      </div>
    </form>
  </main>
</body>
</html>