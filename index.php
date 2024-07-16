<?php 

  // set default time zone
  date_default_timezone_set("Asia/Makassar");
  $waktu = date("d / M - Y,  H:i",);

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
    <header>
      <h2>
          Daftar Harga<br>
          <span>Kios Na'im</span>
      </h2>

      <div class="tambah">
        <button type="button">
          <span class="material-symbols-outlined">add</span>
          Tambah Barang
        </button>
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
        <tr>
          <td>1</td>
          <td>Pemarograam Web Dasar</td>
          <td>Buku Bacaan</td>
          <td style="width: 40%;">Buku dengan judul Pemrograman web dasar, ditulis oleh Alan S.Kom penerbit informatika</td>
          <td>Rp. 63.000</td>
          <td>
            <button type="button"> <!-- delete tombol-->
              <span class="material-symbols-outlined">delete</span>
            </button>

            <button type="button"> <!-- update tombol-->
             <span class="material-symbols-outlined"> edit_square</span>
            </button>
          </td>
        </tr>      
      </tbody>
    </table>
  </main>

</body>
</html>