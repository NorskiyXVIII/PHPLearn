<?php
	// реализуем мини игру, с помощью массивов и рандома

	$gameStat = ["name" => "RandomGame", "minNum" => 10, "maxNum" => 50, "canPlay" => true];
		$num = rand($gameStat["minNum"], $gameStat["maxNum"]);
	
	if (isset($gameStat["canPlay"]) && $gameStat["canPlay"]) {
		switch ($num) {
			case $num <= 20:
				echo "Переменная \$num в промежутке от {$gameStat["minNum"]} до 20.<br>";
				break;
			case $num >= 20 && $num <= 30:
				echo "Переменная \$num в промежутке от 20 до 30.<br>";
				break;
			case $num >= 30 && $num <= 40:
				echo "Переменная \$num в промежутке от 30 до 40.<br>";
				break;
			case $num >= 40 && $num <= 50:
				echo "Переменная \$num в промежутке от 40 до 50.<br>";
				break;
		}
		echo "Рандомное число равно: $num.<br>";
	} else if (empty($gameStat["canPlay"])) {
		echo "Игра не может работать! Аргумент не разрешает играть.<br>";
	}
	
	unset($gameStat);
	// var_dump($gameStat);