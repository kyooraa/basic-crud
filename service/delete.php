<?php
include '../config/database.php';

if(isset($_POST['id'])) {

  $id = $_POST['id'];
  $query = "DELETE FROM barang WHERE id = $id";

  mysqli_query($conn, $query);

  header("Location: ../page/list.php");
}

