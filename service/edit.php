<?php
include '../config/database.php';

if(isset($_POST['name']) && isset($_POST['stok'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $stok = $_POST['stok'];

  $query = "UPDATE barang SET name='$name', stok=$stok WHERE id=$id";
  mysqli_query($conn, $query);

  header("Location: ../page/list.php");
}
