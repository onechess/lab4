<?php
    ini_set('display_errors','off');
    session_start();

    if($_SESSION['user'])
    {
      header('Location: account.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
	<?php include_once 'templates/styles.html' ?>
</head>
<body>
<?php
include_once 'templates/header.php' ?>
    <section>
        <div class="container">
          <div class="row">
            <div class="col center1">
              <h1>Вход</h1>
                <form action="validation/signin.php" method="post" class="form1">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Логин">
                    <input type="text" class="form-control" name="password" id="password" placeholder="Пароль">
                    <button class="btn btn-success" type="submit">Войти</button>
                </form> 
            </div>
            <div class="col center1">
              <h1>Регистрация</h1>
                <form action="validation/signup.php" method="post" class="form1">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Логин">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Эл. почта">
                    <input type="text" class="form-control" name="password" id="password" placeholder="Пароль">
                    <button class="btn btn-success" type="submit">Подтвердить</button>
                </form> 
            </div>
          </div>
        </div>
    </section>

	<?php include_once 'templates/scripts.html' ?>
</body>
</html>

<!--
  
-->