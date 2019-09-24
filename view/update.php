<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td>ID</td>
            <td><input name="id" value="<?php echo $product->getId() ?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $product->getName() ?>"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" value="<?php echo $product->getPrice() ?>"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="description" value="<?php echo $product->getDescription() ?>"></td>
        </tr>
        <tr>
            <td>Vendor</td>
            <td><input type="text" name="vendor" value="<?php echo $product->getVendor() ?>"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Update</button>
            </td>
            <td><a href="index.php">Huy</a></td>
        </tr>
    </table>
</form>
</body>
</html>