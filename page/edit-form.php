<?php
include '../config/database.php';

$query = "SELECT * FROM barang WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form PHP</title>
</head>
<body>
  <form method="POST" action="../service/edit.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= $row['name'] ?>"><br><br>
    <label for="stok">Stok:</label>
    <input type="number" id="stok" name="stok" value="<?= $row['stok'] ?>"><br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
