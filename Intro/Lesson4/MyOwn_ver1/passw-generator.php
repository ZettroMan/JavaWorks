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

	<div class="contentWrap">
		<div class="content">
			<div class="center">
				<h1>Генератор паролей</h1>

				<div class="box">
					<p id="info">Введите, пожалуйста, длину пароля:</p>
					<input type="text" id="password_length">
					<br>
					<a href="#" onclick="guess();" id="button">Начать</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	Copyrigth &copy; <?php echo date("Y");?> Роман Русских
</div>
</body>
</html>
