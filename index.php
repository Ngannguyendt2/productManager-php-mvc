<?php

use controller\ProductController;
use model\ProductManager;

include "model/database/DBconnect.php";
include "model/Product.php";
include "model/ProductManager.php";
include "controller/ProductController.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php

$controller=new ProductController();
$page=$_GET['page']?$_GET['page']:NULL;
switch ($page){
    case 'add':
        $controller->insert();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'update':
        $controller->repair();
        break;
    default:
        $controller->index();
        break;
}
?>
</body>
</html>
