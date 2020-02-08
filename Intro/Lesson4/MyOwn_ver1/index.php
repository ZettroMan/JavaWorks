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
			<p><b style="color: #40678a">Добрый день!</b> Меня зовут <i><b style="color: #40678a">Роман Русских</b><i>. Я с детства люблю математику и программирование, но так вышло, что мне еще не доводилось писать сайты... Этот сайт - первый! Спасибо IT порталу <a href="https://GeekBrains.ru"><b>GeekBrains</b></a> за то, что он помогает мне осваивать эту новую для меня Вселенную! )))</p>

			<p>На моем сайте вы можете сыграть в несколько игр, которые я специально для этого написал.</p>
			
			<p>
				<a href="#">Главная</a>
				<a href="riddles.html">Загадки</a>
				<a href="guess.html">Угадайка</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyrigth &copy; <?php echo date("Y");?> Роман Русских
</div>
</body>
</html>
