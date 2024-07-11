<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Barang</title>

  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <nav>
    <div class="judul">
      <h1>
        <a href="#">Belajar GIT dan Murajaah Pembelajaran PHP</a>
      </h1>
    </div>
  
    <div class="waktu">
      <?php 
        // set default time zone
        date_default_timezone_set("Asia/Makassar");

        echo date("d / M - Y,  H:i:s",);
      ?>
    </div>
  </nav>

  <main>
    <header>
      <h2>Daftar Barang</h2>
    </header>

    <table border="1">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Kategori</th>
          <th>Deskripsi</th>
          <th>Harga</th>
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
            <button type="button">Hapus</button>
            <button type="button">Ubah</button>
          </td>
        </tr>      
      </tbody>
    </table>
  </main>

</body>
</html>