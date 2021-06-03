<?php
    
    $connect  = mysqli_connect('localhost', 'root', '', 'register-bd');

    if (!$connect)
    {
        die('Ошибка подключения к БД');
    }

?>