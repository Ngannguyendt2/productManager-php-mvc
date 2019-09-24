<h2>DANH SACH SAN PHAM</h2>
<a href="index.php?page=add">Add</a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <td scope="col">STT</td>
        <td scope="col">Ten san pham</td>
        <td scope="col">Gia</td>
        <td scope="col">Mo ta</td>
        <td scope="col">Nha san xuat</td>
        <td></td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($products

    as $key => $product):
    ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $product->getName() ?></td>
        <td><?php echo $product->getPrice() ?></td>
        <td><?php echo $product->getDescription() ?></td>
        <td><?php echo $product->getVendor() ?></td>
        <td><a href="index.php?page=delete&id=<?php echo $product->getId() ?>"
               onclick="return confirm('Are you sure want to delete?')">Delete</a></td>
        <td><a href="index.php?page=update&id=<?php echo $product->getId() ?>">Update</a></td>
    </tr>
    </tbody>
    <?php endforeach; ?>
</table>
