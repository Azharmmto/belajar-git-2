<?php 
  
  // connect database
  require "connect.php";

  function query($query){

    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }

    return $rows;

  }

  // ====== tambha barang ========
  function tambah($method){

    global $conn;

    // ambil tiap-tiap data pada form
    $nama = htmlspecialchars(stripslashes($method["nama"]));
    $kategori = htmlspecialchars(stripslashes($method["kategori"]));
    $harga = htmlspecialchars(stripslashes($method["harga"]));
    $deskripsi = htmlspecialchars(stripslashes($method["deskripsi"]));

    $queryInsert = "INSERT INTO barang(id, nama, kategori, harga, deskripsi)
                    VALUES
                    ('', '$nama', '$kategori', $harga, '$deskripsi')";

    mysqli_query($conn, $queryInsert);
    
    return mysqli_affected_rows($conn);

  }

  // ======= hapus barang =========
  function hapus($id){

    global $conn;

    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

    return mysqli_affected_rows($conn);

  }

  // =========== update barang ===============
  function update($method){
    global $conn;

    // ambil tiap-tiap data pada form
    $id = $method["id"];
    $nama = htmlspecialchars(stripslashes($method["nama"]));
    $kategori = htmlspecialchars(stripslashes($method["kategori"]));
    $harga = htmlspecialchars(stripslashes($method["harga"]));
    $deskripsi = htmlspecialchars(stripslashes($method["deskripsi"]));

    $queryUpdate = "UPDATE barang SET nama = '$nama', kategori = '$kategori', harga = '$harga', deskripsi = '$deskripsi' WHERE id = $id";

    mysqli_query($conn, $queryUpdate);
    
    return mysqli_affected_rows($conn);

  }



?>