<?php
    
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES (NULL, '$login', '$password', '$email')");

    header('Location: ../index.php');

?>