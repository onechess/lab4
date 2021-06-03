<?php
    
    require_once 'ordersconnect.php';

    $product = $_POST['product'];
    $square = $_POST['square'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    mysqli_query($connect, "INSERT INTO `orders` (`id`, `product`, `square`, `name`, `phone`) VALUES (NULL, '$product', '$square', '$name', '$phone')");

    header('Location: ../account.php');

?>