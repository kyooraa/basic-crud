<?php
include '../config/database.php';

if(isset($_POST['name']) && isset($_POST['stok'])) {
  $name = $_POST['name'];
  $stok = $_POST['stok'];

  $query = "INSERT INTO barang (name, stok) VALUES ('$name', $stok)";
  mysqli_query($conn, $query);

  header("Location: ../page/list.php");
}
