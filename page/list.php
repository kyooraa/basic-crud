<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List PHP</title>
</head>
<body>
  <button><a href="add-form.php">Add Data</a></button>
  <table style="width:10%" border="1">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Stok</th>
      <th colspan=2>Action</th>
    </tr>
    <?php
    include '../config/database.php';

    $query = "SELECT * FROM barang";
    $result = mysqli_query($conn, $query);
    $no=1;

    while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['stok'] ?></td>
      <td>
        <form method='POST' action='../service/delete.php'>
          <input type='hidden' name='id' value='<?= $row['id'] ?>'>
          <button>🗑️ Delete</button>
        </form>
      </td>
      <td><button><a href="edit-form.php?id=<?= $row['id'] ?>">✏️ Edit</a></button></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
