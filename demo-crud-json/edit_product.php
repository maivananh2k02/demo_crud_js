<?php
include_once 'Product.php';
include_once 'Data.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $product = Data::getProductById($id);
}

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Student</title>
    </head>
    <body>
    <form method="post">
        <input type="text" name="id" placeholder="Input Id" value="<?php echo $product->getId() ?>">
        <input type="text" name="name" placeholder="Input Name" value="<?php echo $product->getName() ?>">
        <input type="text" name="price" placeholder="Input Price" value="<?php echo $product->getPrice() ?>">
        <input type="text" name="img" placeholder="Input Img" value="<?php echo $product->getImg() ?>">
        <button type="submit">update</button>
    </form>
    </body>
    </html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $img = $_REQUEST['img'];
    $product1 = new Product($id, $name, $price, $img);
    Data::editProductById($id, $product);
    header('location:index.php');
}