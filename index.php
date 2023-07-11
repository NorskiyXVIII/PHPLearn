<?php
	/* 
	Двумерный массив это массив, в котором есть другие массивы
		есть так же трехмерный массив, это массив в котором массив и в этих массивах другие массивы
		и т.д, т.е есть четырехмерные, пятимерные даже массивы, но кому они нужны? для огромных данных
		но т.к мы не в NASA, зачем же нам эти массивы большие? мы рассмотрим только двумерные массивы, потому что они часто применяются с рабтой с базами данных
	Начнем!
	*/

	// создаем двумерный массив:
	$userBase = [
		["id" => 1, "name" => "Norskiy"],
		["id" => 2, "name" => "Butab"],
		["id" => 3, "name" => "Admin"]
	];
	/* 
	лучше всего писать двумерные массивы не встроку, а как матритсу, ну как функтсию, т.е вот так
	мы создали переменная, которая хранить базу пользователей! Круто! Мы даже сделали ассотсиативные массивы
	да, их можно комбинировать!
	А ТЕПЕРЬ ДАВАЙТЕ ВЫВЕДЕМ ВСЕ НА ЭКРАН!
	*/

	// чтобы вывести на экран массив, нам нужно написать два индекса, первый индекс означает массив, который мы выбираем, а второй индекс означает значение, которое мы выбираем
	// т.е вот так: $arr[массив который выбираем][значение которое мы хотим выбрать в массиве который выбрали]
	// допустим хотим вывести имя первого пользователя:
	echo "Имя первого пользователя: {$userBase[0]["name"]} <br>";
	// сразу что скажу, стараемся писать массивы в {}, да, так мы будем отделять что массив а что просто квадратные скобки
	// проще говоря, принято писать вызов массива внутри {}, хотя знаете, если массив не написать в {}, то это еще ладно, а вот если ДВУМЕРНЫЙ массив не написать в {}, то это будет огромная ошибка!
	
	// слушайте, давайте создадим более крутую Юзер базу!
	$userBaseBetter = [
		"id1" => [ "name" => "Norskiy", "role" => "Owner", "regData" => "11.07.2023"],
		"id2" => ["name" => "Butab", "role" => "Gl. Admin", "regData" => "11.07.2023"],
		"id3" => ["name" => "Admin", "role" => "Admin", "regData" => "11.07.2023"]
	];
	// красиво, неправда ли?

	echo "Имя: {$userBaseBetter["id1"]["name"]}, Роль: {$userBaseBetter["id1"]["role"]}, Дата регистратсии: {$userBaseBetter["id1"]["regData"]}";