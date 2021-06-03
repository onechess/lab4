<?php
    
    require_once 'validation/ordersconnect.php';

    $result = mysqli_query($connect, "SELECT * FROM `orders`");

?>

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
            <h3 style="margin-top: 50px;">Заказы</h3>
            <table class="table table-hover" style="margin-top: 50px;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Продукт</th>
                        <th scope="col">Заказчик</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($product = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo '<td>', $product['id'], '</td>';
                            echo '<td>', $product['product'], '</td>';
                            echo '<td>', $product['name'], '</td>';
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
	
	<?php include_once 'templates/scripts.html' ?>
</body>
</html>