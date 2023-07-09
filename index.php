<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<title>Программирование на языке PHP</title>
<body>

	<h1>Типы данных</h1>
	<h2>Слабая типизация</h2>
	
	<?php
		echo '1) ', 11 + '7', '<br />'; // 18
		// echo '1) ' . 11 + (int) '7' . "<br>";

		echo '2) ', '2' + '5', '<br />'; // 7
		//echo ''2)" . (int) '2' + (int) '5' . "<br>";

		echo '3) ', 2 + '7 abc', '<br />'; // ошибка
		
		echo '4) ', 2 + 'abc7', '<br />'; // ошибка

		echo '5) ', 1 + true + null, '<br />'; // ошибка возможно

		echo '6) ', 1 + (int) 'abc7', '<br />'; // ошибка

		echo '7) ', 2 * '7abc', '<br />'; // ошибка

		echo '8) ', true + false + true + true, '<br />'; // 3

		echo '9) ', '8' / '2' - 'null', '<br />'; // ошибка
	
		echo '10) ', '4.5px' - 3; // ошибка
	?>
	
</body>
</html>