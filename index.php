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

</body>
</html>