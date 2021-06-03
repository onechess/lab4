<?php
    
    $connect  = mysqli_connect('localhost', 'root', '', 'order-bd');

    if (!$connect)
    {
        die('Ошибка подключения к БД');
    }

    mysqli_set_charset($connect, 'utf8');

?>