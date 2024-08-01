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
  <link rel="stylesheet" href="css/tambah.css" />

</head>
<body>

  <nav>
    <div class="judul">
      <h1>
        <a href="#">Kios Na'im</a>
      </h1> 
    </div>

    <div class="waktu">
      <?= $waktu ?>
    </div>
  </nav>

  <div class="container mt-4 shadow-sm px-5 py-3" style="width: 60%;">

    <?php if(isset($_POST["tambah"])) : ?>
      <?php if(isset($addBarang)) : ?>
        <div class="alert-berhasil shadow" id="alert-berhasil">
          <span>Barang berhasil ditambahkan!</span>

          <span class="material-symbols-outlined close" id="close-alert" style="cursor: pointer;">close</span>
        </div>
      <?php endif ?>
    <?php endif ?>

    <div class="row">
      <div class="col">
        <h2 class="fs-3 fw-bold">Tambah Barang</h2>
      </div>
    </div>

    <form action="" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label fw-medium">Nama Barang</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama barang..." minlength="5" required>
      </div>

      <div class="mb-3">
        <label for="kategori" class="form-label fw-medium">Kategori Barang</label>
        <select class="form-select" aria-label="Default select example" id="kategori" name="kategori" required>
          <option selected>Pilih kategori...</option>
          <option value="Makanan dan Minuman">Makanan dan Minuman</option>
          <option value="Bahan Pokok">Bahan Pokok</option>
          <option value="Bumbu Dapur">Bumbu Dapur</option>
          <option value="Produk Susu">Produk Susu</option>
          <option value="Produk Kebersihan">Produk Kebersihan</option>
          <option value="Produk Kesehatan">Produk Kesehatan</option>
          <option value="Alat Tulis">Alat Tulis</option>
          <option value="Ice Cream">Ice Cream</option>
          <option value="Obat Obatan">Obat Obatan</option>
          <option value="Permen">Permen</option>
          <option value="Voucher TRI">Voucher TRI</option>
          <option value="Voucher Telkomsel">Voucher Telkomsel</option>
          <option value="Voucher Indosat">Voucher Indosat</option>
          <option value="Rokok dan Aksesorisnya">Rokok dan Aksesorisnya</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="harga" class="form-label fw-medium">Harga Barang</label>
        <input type="number" class="form-control" id="harga" placeholder="Masukkan harga barang..." name="harga" required>
      </div>

      <div class="mb-3">
        <label for="deskripsi" class="form-label fw-medium">Deskripsi Barang</label>
        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deksripsi barang..." name="deskripsi" minlength="3"></textarea>
      </div>

      <div class="ms-auto d-flex justify-content-between">
        <a href="../index.php">
          <button type="button" class="btn btn-warning d-flex align-items-center">
            <span class="material-symbols-outlined">arrow_back</span>
            Kembali
          </button>
        </a>

        <button type="submit" name="tambah" class="btn btn-info fw-medium d-flex align-items-center">
          <span class="material-symbols-outlined">add</span>
          Tambah
        </button>
      </div>
    </form>
  </div>

  <!-- js boostrap -->
  <script src="../bootstrap_533/js/bootstrap.min.js"></script>

  <!-- my js -->
  <script>
    const alertBerhasil = document.getElementById("alert-berhasil");
    const closeAlert = document.getElementById("close-alert");

    // Event listener untuk tombol close
    closeAlert.addEventListener("click", function() {
      alertBerhasil.style.display = "none";
    });

    // Mengatur elemen untuk hilang dengan sendirinya setelah bbrapa detik
    setTimeout(function() {
      alertBerhasil.style.display = "none";
    }, 5000);
  </script>
</html>
</body>
</html>