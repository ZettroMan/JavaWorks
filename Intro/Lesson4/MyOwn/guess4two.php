<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">

		function guess4two() {

            var computer_number = parseInt((Math.random() * 100) + 1);
		    var user_answer = 0;
		    var current_user_id = 1;
		    var user1_name = document.getElementById("user1Name").value;
		    var user2_name = document.getElementById("user2Name").value;

		    alert(user1_name + " и " + user2_name + '! Добро пожаловать на игру "Угадай число"!\n Компьютер загадал число в интервале от 1 до 100. Кто первый угадает - тот и выиграл! Начинаем угадывать! ))');

		    while(true) {
		        done = false;
		        do {
		            user_answer = +prompt((current_user_id == 1 ? user1_name : user2_name) + ', ваш ход! Напишите число от 1 до 100. "0" или отсутствие ответа - выход из игры.');
		            if(!isNaN(user_answer) && (user_answer >= 0) && (user_answer <= 100))  done = true; 
		              else alert("Вы ввели что-то не то. Попробуйте еще раз...");
		        } while (!done);

                if(user_answer == 0) {
                	alert("Конец игры. Было загадано число " + computer_number);
                	break;
                }

		        if (user_answer == computer_number) {
		            alert("Поздравляем! " + (current_user_id == 1 ? user1_name : user2_name) + " победил! Было загадано число " + computer_number);
		            break;
		        }
		        else {
  		        	if (user_answer > computer_number)  alert("Мое число меньше " + user_answer);
			        else alert("Мое число больше " + user_answer);
		        	//меняем игрока
                    current_user_id = 3 - current_user_id;        
		            continue; 
		        }
		    }
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
				<h1>Игра "Угадайка" для двоих игроков</h1>

				<div class="box">
					<p>Укажите имя первого игрока</p>
					<input type="text" id="user1Name" value="Игрок1">
					<p>Укажите имя второго игрока</p>
					<input type="text" id="user2Name" value="Игрок2">
					<br>
					<a href="#" onclick="guess4two();" id="button">Начать</a>
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
