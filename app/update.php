<?php 

  session_start();

  // set default time zone
  date_default_timezone_set("Asia/Makassar");
  $waktu = date("d / M - Y,  H:i");

  // connect database
  require "../logic/connect.php";
  require "../logic/functions.php";

  $id = $_GET['id'];

  $barang = query("SELECT * FROM barang WHERE id = $id")[0];

  if(isset($_POST["update"])){

    update($_POST) > 0 ? $_SESSION["updateBerhasil"] = true : $_SESSION["updateBerhasil"] = false;

    // kembali ke halaman index
    header("Location: ../index.php");

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
  <link rel="stylesheet" href="css/update.css" />

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
        <h2 class="fs-3 fw-bold">Update Barang</h2>
      </div>
    </div>

    <form action="" method="post">

      <input type="hidden" name="id" value="<?= $barang["id"] ?>">

      <div class="mb-3">
        <label for="nama" class="form-label fw-medium">Nama Barang</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama barang..." value="<?= $barang["nama"] ?>" />
      </div>

      <div class="mb-3">
        <label for="kategori" class="form-label fw-medium">Kategori Barang</label>
        <select class="form-select" aria-label="Default select example" id="kategori" name="kategori" required>
          <option value="Makanan dan Minuman" <?= $barang["kategori"] === 'Makanan dan Minuman' ? 'selected' : '' ?>>
            Makanan dan Minuman
          </option>

          <option value="Bahan Pokok" <?= $barang["kategori"] === 'Bahan Pokok' ? 'selected' : '' ?>>
            Bahan Pokok
          </option>

          <option value="Bumbu Dapur" <?= $barang["kategori"] === 'Bumbu Dapur' ? 'selected' : '' ?>>
            Bumbu Dapur 
          </option>

          <option value="Produk Kebersihan dan Kesehatan" <?= $barang["kategori"] === 'Produk Kebersihan dan Kesehatan' ? 'selected' : '' ?>>
            Produk Kebersihan dan Kesehatan
          </option>

          <option value="Korek Api" <?= $barang["kategori"] === 'Korek Api' ? 'selected' : '' ?>>
            Korek Api
          </option>

          <option value="Alat Tulis" <?= $barang["kategori"] === 'Alat Tulis' ? 'selected' : '' ?>>
            Alat Tulis
          </option>

          <option value="Ice Cream" <?= $barang["kategori"] === 'Ice Cream' ? 'selected' : '' ?>>
            Ice Cream
          </option>

          <option value="Obat Obatan" <?= $barang["kategori"] === 'Obat Obatan' ? 'selected' : '' ?>>
            Obat Obatan
          </option>

          <option value="Permen" <?= $barang["kategori"] === 'Permen' ? 'selected' : '' ?>>
            Permen
          </option>

          <option value="Voucher" <?= $barang["kategori"] === 'Voucher' ? 'selected' : '' ?>>
            Voucher
          </option>
        </select>
      </div>

      <div class="mb-3">
        <label for="harga" class="form-label fw-medium">Harga Barang</label>
        <input type="text" class="form-control" placeholder="Masukkan harga barang..." name="harga"  value="<?= $barang['harga'] ?> ">
      </div>

      <div class="mb-3">
        <label for="deskripsi" class="form-label fw-medium">Deskripsi Barang</label>
        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deksripsi barang..." name="deskripsi"><?= $barang["deskripsi"] ?></textarea>
      </div>

      <div class="ms-auto">
        <button type="submit" name="update" class="btn btn-info fw-medium me-2">Update</button>
        
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

</body>
</html>