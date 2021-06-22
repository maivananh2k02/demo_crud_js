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
    <input type="text" name="id" placeholder="Input Id">
    <input type="text" name="name" placeholder="Input Name">
    <input type="text" name="price" placeholder="Input Price">
    <input type="text" name="img" placeholder="Input link img">
    <button type="submit">Add</button>
</form>
</body>
</html>
<?php
    include_once 'Product.php';
    include_once 'Data.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $price = $_REQUEST['price'];
        $img = $_REQUEST['img'];
        $product = new Product($id,$name,$price,$img);
        Data::addProduct($product);
        header('location:index.php');
    }