<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании</title>
	<?php include_once 'templates/styles.html' ?>
</head>
<body>
	<?php
	include_once 'templates/header.php' ?>
    <section>
        <div class="container" style="text-align: center;">
            <h3>Если Вы хотите сделать заказ на сбор урожая, заполните данные ниже.<br>Мы обязательно свяжемся с Вами в ближайшее время.</h3>
            <form action="validation/sendorder.php" method="post" class="form1">
                    <input type="text" class="form-control" name="product" id="product" placeholder="Продукт">
                    <input type="text" class="form-control" name="square" id="square" placeholder="Площадь (в гектарах)">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Мобильный телефон">
                    <button class="btn btn-success" type="submit">Отправить заказ</button>
            </form> 
        </div>
    </section>
	
	<?php include_once 'templates/scripts.html'?>
</body>
</html>