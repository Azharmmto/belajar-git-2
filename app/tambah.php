<?php 

  // set default time zone
  date_default_timezone_set("Asia/Makassar");
  $waktu = date("d / M - Y,  H:i");

  // connect database
  require "../logic/connect.php";
  require "../logic/functions.php";

  if(isset($_POST["tambah"])){

    tambah($_POST) > 0 ? $addBarang = true : $addBarang = false;

  }

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

  <div class="container mt-4 shadow-sm px-5 py-5" style="width: 60%;">
    <div class="row">
      <div class="col">
        <h2 class="fs-3 fw-bold">Tambah Barang</h2>
      </div>
    </div>

    <form action="" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label fw-medium">Nama Barang</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama barang..." required>
      </div>

      <div class="mb-3">
        <label for="kategori" class="form-label fw-medium">Kategori Barang</label>
        <select class="form-select" aria-label="Default select example" id="kategori" name="kategori" required>
          <option selected>Pilih kategori...</option>
          <option value="Makanan dan Minuman">Makanan dan Minuman</option>
          <option value="Bahan Pokok">Bahan Pokok</option>
          <option value="Bumbu Dapur">Bumbu Dapur </option>
          <option value="Bumbu Dapur">Bumbu Dapuru</option>
          <option value="Produk Kebersihan dan Kesehatan">Produk Kebersihan dan Kesehatan</option>
          <option value="Korek Api">Korek Api</option>
          <option value="Alat Tulis">Alat Tulis</option>
          <option value="Ice Cream">Ice Cream</option>
          <option value="Obat Obatan">Obat Obatan</option>
          <option value="Permen">Permen</option>
          <option value="Voucher">Voucher</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="harga" class="form-label fw-medium">Harga Barang</label>
        <input type="number" class="form-control" id="harga" placeholder="Masukkan harga barang..." name="harga" required>
      </div>

      <div class="mb-3">
        <label for="deskripsi" class="form-label fw-medium">Deskripsi Barang</label>
        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deksripsi barang..." name="deskripsi"></textarea>
      </div>

      <div class="ms-auto">
        <button type="submit" name="tambah" class="btn btn-info fw-medium me-2">Tambah</button>
        
        <a href="../index.php">
          <button type="button" class="btn btn-warning">
            Batal
          </button>
        </a>
      </div>
    </form>
  </div>

  <!-- js boostrap -->
  <script src="../bootstrap_533/js/bootstrap.min.js"></script>

  <!-- my js -->
  <script>
    // Fungsi untuk memformat angka dengan titik sebagai pemisah ribuan
    // function formatNumberWithDots(value) {
    //     return value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    // }

    // document.getElementById('harga').addEventListener('input', function (e) {
    //     // Hapus semua karakter yang bukan angka
    //     let value = e.target.value.replace(/[^\d]/g, '');
        
    //     // Format angka dengan titik
    //     value = formatNumberWithDots(value);
        
    //     // Tampilkan hasilnya di input
    //     e.target.value = value;
    // });
  </script>
</body>
</html>