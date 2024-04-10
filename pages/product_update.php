<?php
session_start();
include 'conn.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=" stylesheet" href="../css.main.css">
</head>
<body>
    <form action='product_update_logic.php' name='product_update_logic' method="POST">
        <label>ID van product: </label>
        <input type="text" name="id_product" value="<?php echo $product['id']; ?>" required>
        <label>Naam van product: </label>
        <input type="text" name="naam" value="<?php echo $product['naam']; ?>" required>
        <label>Prijs van product: </label>
        <input type="text" name="prijs" value="<?php echo $product['prijs']; ?>" required>
        <input type="submit" value="update product">
    </form>
</body>
</html>