<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">

	<?php	
		include "menu.php";
	?>	

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/my_photo.png">
		<div class="box_text">
			<p><b style="color: #40678a">Добрый день!</b> Меня зовут <b style="color: #40678a">Роман</b>. Я с детства люблю математику и программирование, но так вышло, что мне еще не доводилось писать сайты... Этот сайт - первый! <br><br>Спасибо IT-Порталу <a href="https://GeekBrains.ru"><b>GeekBrains</b></a> за то, что он помогает мне осваивать эту новую для меня Вселенную! )))</p>
			<p>На моем сайте вы найдете несколько простых игр и даже одну полезную программу)):</p>
			<p style="text-align: center;">
				<a href="riddles.php"><i><b>Загадки</b></i></a><br><br>
				<a href="guess.php"><i><b>Угадайка</b></i></a><br><br>
				<a href="guess4two.php"><i><b>Угадайка для двоих</b></i></a><br><br>
				<a href="passw-generator.php"><i><b>Генератор паролей</b></i></a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyrigth &copy; <?php echo date("Y");?> Roman Russkikh
</div>
</body>
</html>
