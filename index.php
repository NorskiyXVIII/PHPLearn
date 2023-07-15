<?php
	// Улучшаем игру.
	/* 
	Теперь вывод от скольки до скольки(диапозон чисел, в который входит рандомное число) чисел не фиксирован
	и подстраивается под рандомное число.
	если число делится без остатка на ход(диапозон), то будет писатся от рандомное число до рандомное число, выглядит вот так:
	ход диапозона(10) (т.е если ранд числ = 8, то он будет в диапозоне от 0 до 10) (ранд числ = 43 диапозон: от 40 до 50)
	если число = 30, ход = 10, то диапозон будет от 30 до 30
	*/

	$gameStat = ["name" => "RandomGame", "minNum" => 0, "maxNum" => 100, "step" => 10, "canPlay" => true];
		$num = rand($gameStat["minNum"], $gameStat["maxNum"]);
		$numDiaposonMin = $num;
		$numDiaposonMax = $num;

	if (isset($gameStat["canPlay"]) && $gameStat["canPlay"]) {
		if (!($num % $gameStat["step"] == 0)) {
			$numDiaposonMin -= $numDiaposonMin % $gameStat["step"];
			$numDiaposonMax += $gameStat["step"] - ($numDiaposonMax % $gameStat["step"]);
		}
		echo "Переменная \$num в промежутке от $numDiaposonMin до $numDiaposonMax.<br>";
		echo "Рандомное число равно: $num.<br>";
	} else if (empty($gameStat["canPlay"])) {
		echo "Игра не может работать! Аргумент не разрешает играть.<br>";
	}
	
	unset($gameStat);
	// var_dump($gameStat);