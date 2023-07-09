<?php
$VarStr = 'Слабая типизация PHP';
const CONSTSTR = 'Слабая типизация PHP';
define("ARRSTR", array('Слабая типизация PHP'));
	var_dump($VarStr);
	var_dump(CONSTSTR);
	var_dump(ARRSTR);