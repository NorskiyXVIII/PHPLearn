<?php
	// массивы
	/* Массивы - это набор данных, представь как переменная, но круче
	массив это как тип данных, который может хранить другие скалярные типы(Числа, строки и т.д)
	вот так можно создать массив:
	через функтсию
		$arrFunc = array("ddd", "cc", "abcbc", 4);
	
	через синтаксис массива
		$arrSyn = ["ddd", "cc", "abcbc", 4];

	оба синтаксиса создадут массив.
	я буду использовать массив с квадратными скобками.
	
	и так, массив проще говоря это переменная которая может хранить другие переменные.
	массивы делятся на 3 типа:
		индексный,
		ассотсиативный,
		многомерный. 

	поговорим про индексный. Первое что я скажу, это про индекс.
		Представь, что массив хранит переменные, и эти переменные имеют свой индитефикатор, который начинатеся с нуля
		вот и все, это весь индекс

		$arrSyn = ["ddd", "cc", "abcbc", 4];
			сдесь "ddd" имеет индекс 0, индексы начинаются с нуля, да, вот так
			так же массив может хранить любые данные, числа, строки, булева и т.д

	вывести массив просто так не получится, чтобы его вывести, нужно написать вот так:
	echo $arr[index];
	где $arr это переменная массива, а вместо index пишем индекс(0, 1, 34 и т.д)
	

	Массивы так же можно создавать пустыми, и потом добавить элемент в массив.
	
			создаем массив
		$arr = [];
			присваиваем массиву значение "name" по индексу 0
		$arr[0] = "name";

		но по индексу можно и присваивать значения аргументам, но мы иногда можем не знать сколько всего аргументов массиве
			а допустим аргументов в массиве много?
				и сдесь поможет синтаксис там, где мы не указываем индекс
					$arr[] = "surname";
						этот синтаксис означает то, что мы добавляем новый элемент в массиве, где индекс присваивается по формуле: максимальный индекс в массиве + 1
						Т.е чекай:
							$arr = ["name"];
								Означает то, что после name прибавляется "surname"
							$arr[] = "surname";
								после surname прибавляется в массиве moderator
							$arr[] = "moderator";

	
Но знаете, иногда неудобно в массивах обращатся к индексу 3, 0, 34 и т.д, и проще для таких тселей юзать ассотсиативный массив
	это такой массив, где вместо индексов есть ключи, которые не как числа, а как имена индексов, т.е:
		$arr = ["name" => "Norskiy", "surname" => "XVIII", "years" => 15];
		Проще говоря, ключи это как индексы, но как строки
			так же вот как заносятся в ассотсиативные массивы:
				$arr["ключ"] = "данные";
				выводится вот так на экран:
				echo $arr["ключ"]
	*/