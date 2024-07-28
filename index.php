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

  <!-- my css -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="app/css/tambah.css" />

  <!-- css datatable -->
  <link href="https://cdn.datatables.net/v/dt/dt-2.1.2/datatables.min.css" rel="stylesheet">
 

  <!-- icons google -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

  <?php if(isset($_SESSION["updateBerhasil"])) : ?>   
    <div class="alert-berhasil shadow" id="alert-berhasil">
      <span>Barang berhasil diubah!</span>

      <span class="material-symbols-outlined close" id="close-alert" style="cursor: pointer;">close</span>
    </div>
    <?php unset($_SESSION["updateBerhasil"]); ?>
  <?php endif ?>

    <?php if(isset($_SESSION["hapusBerhasil"])) : ?>   
      <div class="shadow hapus-berhasil" id="alert-berhasil">
        <span>Barang berhasil dihapus!</span>

        <span class="material-symbols-outlined close" id="close-alert" style="cursor: pointer;">close</span>
      </div>
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

    <table id="myTable">
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
              <a href="app/update.php?id=<?= $barangs["id"] ?> ">
                <button type="button"> <!-- update tombol-->
                  <span class="material-symbols-outlined"> edit_square</span>
                </button>
              </a>

              <a href="app/hapus.php?id=<?= $barangs["id"] ?>" onclick="return confirm('Yakin ingin menghapus barang, <?= $barangs['nama'] ?>')">
                <button type="button"> <!-- delete tombol-->
                  <span class="material-symbols-outlined">delete</span>
                </button>
              </a>
            </td>
          </tr>
          <?php $i++ ?>
        <?php endforeach ?>      
      </tbody>
    </table>
  </main>

  <!-- my js -->
  <script>
    const alertBerhasil = document.getElementById("alert-berhasil");
    const closeAlert = document.getElementById("close-alert");

    closeAlert.addEventListener("click", function() {
      alertBerhasil.style.display = "none";

      setTimeout( function(){
        alertBerhasil.style.display = "none";
      }, 5000);
    });
  </script>

  <!-- js data table -->
  <script src="https://cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable({
        "columns": [
            { "data": "#" },
            { "data": "Nama Barang" },
            { "data": "Kategori Barang" },
            { "data": "Harga" },
            { "data": "Deskripsi" },
            { "data": "Action" }
        ],

        "language": {
            "search": "",
            "searchPlaceholder": "Cari barang..."
        }
      });
    });
  </script>

</body>
</html>