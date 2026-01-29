<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form PHP</title>
</head>
<body>
  <form method="POST" action="../service/add.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="stok">Stok:</label>
    <input type="number" id="stok" name="stok"><br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
