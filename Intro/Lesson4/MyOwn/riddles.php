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
				<h1>Игра в загадки</h1>

				<div class="box">

 					<?php	
						if(isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"])) {
							$score = 0;
							$userAnswer = $_GET["userAnswer1"];
							if($userAnswer == "ель" || $userAnswer == "елка" || $userAnswer == "ёлка")	$score++;
							 
							$userAnswer = $_GET["userAnswer2"];
							if($userAnswer == "коньки")	$score++;
							 
							$userAnswer = $_GET["userAnswer3"];
							if($userAnswer == "арбуз" || $userAnswer == "арбузы")	$score++;
							 
							echo "Вы угадали " . $score . " загадок";
						} 					
					?>

					<form method="GET">
						<p>Зимой и летом одним цветом</p>
						<input type="text" name="userAnswer1">

						<p>Льется речка — мы лежим. Лед на речке — мы бежим</p>
						<input type="text" name="userAnswer2">

						<p>К нам приехали с бахчи полосатые мячи</p>
						<input type="text" name="userAnswer3">
						<br>
						<input type="submit" value="Ответить" name="">
					</form>
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
