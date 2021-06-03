<?php 
    session_start();
    ini_set('display_errors','off');

    if(!$_SESSION['user'])
    {
      header('Location: registration.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сбор урожая</title>
	<?php include_once 'templates/styles.html' ?>
</head>
<body>
	<?php
	include_once 'templates/header.php' ?>
    <section>
        <div class="container">
            <h1>Привет, <?=$_SESSION['user']['login']?></h1>
            <a href="validation/logout.php" class="btn btn-outline-success" role="button">Выйти</a>
            <a href="orders.php" class="btn btn-outline-success" role="button">Посмотреть все заказы</a>
        </div>
    </section>
	
	<?php include_once 'templates/scripts.html' ?>
</body>
</html>