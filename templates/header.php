<?php
    ini_set('display_errors','off');
    session_start();
?>

<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="index.php" style="color: green;">(Здесь будет лого)</a>
			<button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="contacts.php">Контакты</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="about.php">О компании</a>
					</li>
				</ul>
				
				<form method="get" id="search-form" class="row row-cols-lg-auto g-3 align-items-center me-2" action="search.php">
					<div class="files-wrapper col-6">
						<select id="files-select" class="form-select" name="selectedFile">
							<option value="all" selected>По всем файлам</option>
						</select>
					</div>
					
					<div class="search-field-wrapper col-6">
						<input id="search-field" type="text" name="searchMap" class="form-control" required placeholder="Введите искомое значение">
						<!-- <input type="reset" class="btn btn-secondary"> -->
					</div>
					
					<div class="col-12">
						<input type="submit" class="btn btn-primary">
					</div>
				</form>
				
				<form class="d-flex">
					<?php
						if(!$_SESSION['user']):
					?>
					<a href="registration.php" class="btn btn-outline-success">Вход/Регистрация</a>
					<?php else:?>
					<a href="makeorder.php" class="btn btn-outline-success" style="margin-right: 5px;">Сделать заказ</a>
					<a href="account.php" class="btn btn-outline-success">Мой аккаунт</a>
					<?php endif;?>
				</form>
			</div>
		</div>
	</nav>
</header>