<?php 

  session_start();

  require "../logic/functions.php";

  $id = $_GET["id"];

  if(hapus($id) > 0){

    $_SESSION["hapusBerhasil"] = true;
    header("Location: ../index.php");

  }

?>