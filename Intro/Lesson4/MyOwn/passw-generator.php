<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript">

        var all_chars = "ABCDEFJHIJKLMNOPQRSTUVWXYZabcdefjhijklmnopqrstuvwxyz1234567890";

		function write(text) {
			document.getElementById("password").innerHTML = "Пароль: <b>" + text + "</b>";
		}

		function generate() {			
			var pass_len = +document.getElementById("password_length").value;
			var max_index = all_chars.length;
			if(isNaN(pass_len) || pass_len < 1) {
				alert("Введено некорректное значение длины. Исправьте, пожалуйста.");
				return;
			}

			var password = "";
			for(i = 0; i < pass_len; i++) {
				password += all_chars[parseInt(Math.random() * max_index)];
			 }

			write(password);
		}
	</script>

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
					<p>Введите, пожалуйста, длину пароля:</p>
					<input type="text" id="password_length">
					<br>
					<a href="#" onclick="generate();">Генерировать!</a>
					<br><br><br><br>
					<p id="password">Пароль :</p>
				</div>


			</div>
		</div>
	</div>
</div>
<div class="footer">
	Copyrigth &copy; <?php echo date("Y");?> Roman Russkikh
</div>
</body>
</html>
