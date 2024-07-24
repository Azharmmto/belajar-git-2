<?php 

  session_start();

  // set default time zone
  date_default_timezone_set("Asia/Makassar");
  $waktu = date("d / M - Y,  H:i");

  // connect database
  require "logic/connect.php";
  require "logic/functions.php";

  $barang = query("SELECT * FROM barang");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Barang</title>

  <link rel="stylesheet" href="style.css" />

  <!-- icons google -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

  <?php if(isset($_SESSION["hapusBerhasil"])) : ?>

    <script>
      alert("Hapus Berhasil");
    </script>

    <?php unset($_SESSION["hapusBerhasil"]); ?>
  <?php endif ?>

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

  <main>
    <header>
      <h2>
          Daftar Harga 
      </h2>

      <div class="tambah">
        <a href="app/tambah.php">
          <button type="button">
            <span class="material-symbols-outlined">add</span>
            Tambah Barang
          </button>
        </a>
      </div>
    </header>

    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Barang</th>
          <th>Kategori Barang</th>
          <th>Harga</th>
          <th>Deskripsi</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <?php $i = 1 ?>
        <?php foreach($barang as $barangs) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $barangs["nama"] ?></td>
            <td><?= $barangs["kategori"] ?></td>
            <td><?= "Rp" . number_format($barangs["harga"]) ?></td>
            <td><?= $barangs["deskripsi"] ?></td>
            <td>
              <a href="app/hapus.php?id=<?= $barangs["id"] ?> ">
                <button type="button"> <!-- delete tombol-->
                  <span class="material-symbols-outlined">delete</span>
                </button>
              </a>

              <a href="app/update.php?id=<?= $barangs["id"] ?> ">
                <button type="button"> <!-- update tombol-->
                  <span class="material-symbols-outlined"> edit_square</span>
                </button>
              </a>
            </td>
          </tr>
          <?php $i++ ?>
        <?php endforeach ?>      
      </tbody>
    </table>
  </main>

</body>
</html>