<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Сбор урожая</title>
	
	<meta name="description" content="max 155 characters, written for humans">
	
	<?php include_once 'templates/styles.html' ?>
</head>
<body>
	<?php include_once 'templates/header.php' ?>
	<section>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-5">
					<h1>Добро пожаловать!</h1>
				</div>
				<div class="col-7">
					<img class="w-100" src="https://cache.larvf.com/data/photo/w1650_ci/5j/vendageur.jpg" alt="Gathering">
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<h2>Информация</h2>
			<div class="row">
				<div class="col">
					<div class="card" style="width: 18rem;">
						<img src="https://im0-tub-ru.yandex.net/i?id=fd978cc444265ee32d33550c40fbe92f-l&n=13" class="card-img-top" alt="Gather">
						<div class="card-body">
							<h5 class="card-title">Виды продукции</h5>
							<p class="card-text">Какой продукцией мы занимаемся?</p>
							<a href="./html/production.html" class="btn btn-primary">Узнать</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card" style="width: 18rem;">
						<img src="https://images-eu.ssl-images-amazon.com/images/I/71tXNjdBj1L.jpg" class="card-img-top" alt="List">
						<div class="card-body">
							<h5 class="card-title">Список сборщиков</h5>
							<p class="card-text">Взгляните на список наших сотрудников</p>
							<a href="./html/collectors.html" class="btn btn-primary">Посмотреть</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card" style="width: 18rem;">
						<img src="https://eurabota.com/uploads/photo_1532357123.jpg" class="card-img-top" alt="Team">
						<div class="card-body">
							<h5 class="card-title">Наши бригады</h5>
							<p class="card-text">Ознакомьтесь со списком наших бригад</p>
							<a href="./html/teams.html" class="btn btn-primary">Ознакомиться</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card" style="width: 18rem;">
						<img src="http://expert-audit39.ru/wp-content/uploads/2017/09/2.jpg" class="card-img-top" alt="Journal">
						<div class="card-body">
							<h5 class="card-title">Учёт сбора</h5>
							<p class="card-text">Наш полный журнал с учётом всех сборов урожая</p>
							<a href="./html/list.html" class="btn btn-primary">Прочесть</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php include_once 'templates/scripts.html' ?>
</body>
</html>
