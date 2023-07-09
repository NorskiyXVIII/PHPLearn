<?php 
    // перевод 1000 долларов через рубли в юани

    // создаем переменные(не магческие числа)
    $oneDollarInRubles = 91.69;
    $dollarsCount = 1000;
    $oneYuanInRubles = 12.64;
    // делаем расчет долларов в юани где мы доллары переводим в рубли а потом в юани
    $DollarsInYuanes = ($oneDollarInRubles * $dollarsCount) / $oneYuanInRubles;
    // выводим на экран сколько юаней в 1000 долларов
    echo $DollarsInYuanes;