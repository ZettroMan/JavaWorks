<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100) + 1;
		var try_count = 10;

		function readInt() {
			return +document.getElementById("userAnswer").value;
		}

		function write(text) {
			document.getElementById("info").innerHTML = text;
		}

		function hide(id) {
			document.getElementById(id).style.display = "none";
		}

		function guess() {
			var userAnswer = readInt();
			if((userAnswer < 1) || (userAnswer > 100)) {
				alert("Вы ввели неправильное значение. Попробуйте еще раз...");
				document.getElementById("userAnswer").value = "";
				return;
			}
			if(userAnswer == answer) {
				write("<b>Поздравляю, Вы угадали!</b>"); 
				hide("userAnswer");
				hide("button");
				return;
			}
			try_count--;
			if(try_count == 0) {
				write("Закончились попытки, Вы проиграли!<br>Правильный ответ: " + answer);
				hide("userAnswer");
				hide("button");
 				return;
 			}			
			if(userAnswer < answer)
				write("Загаданное число <b>больше</b> " + userAnswer + ". Осталось попыток: <b>" + try_count + "</b>");
			else
				write("Загаданное число <b>меньше</b> " + userAnswer + ". Осталось попыток: <b>" + try_count + "</b>");
			//для того, чтобы не тыкать каждый раз мышкой в поле, выделяем его
			document.getElementById("userAnswer").select();
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
				<h1>Игра "Угадайка"</h1>

				<div class="box">
					<p id="info">Угадайте число от 1 до 100. У Вас <b>10</b> попыток.</p>
					<input type="text" id="userAnswer">
					<br>
					<a href="#" onclick="guess();" id="button">Начать</a>
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
