<?php
	$numberOne = $_GET['numberOne'];
	$numberTwo = $_GET['numberTwo'];
	$action = $_GET['action'];
	$arrNumberOne = str_split($numberOne,1);
	$arrNumberTwo = str_split($numberTwo,1);


	if (!isset($_GET)) {
		return "Значения не переданы";
	}
	if (!isset($_GET['action'])) {
		return "Не передана операция";
	}
	if (!isset($numberOne) || !isset($numberTwo)) {
		return "Не переданы аргументы";
	}
	if ($arrNumberOne[0] == " " || $arrNumberTwo[0] == " ") {
		return "Уберите лишние пробелы";
	}

	if (is_numeric($numberOne) && is_numeric($numberTwo)) {
		

	$calculation = $numberOne . ' '.$_GET['action'].' '.$numberTwo.' = ';

	switch ($action) {
		case '+':
		$resultCalc = $numberOne + $numberTwo;
		break;
		case '-':
		$resultCalc = $numberOne - $numberTwo;
		break;
		case '*':
		$resultCalc = $numberOne * $numberTwo;
		break;
		case '/': 
		$numberTwo == 0 ? $resultCalc = 'на ноль делить нельзя' : $resultCalc = $numberOne / $numberTwo;
		break;
		default:
		$resultCalc = 'Неверное действие';
		break;
	}

	return $calculation.$resultCalc;
}
else {
	return "Ошибка. В качестве аргумента передана строка";
}
?>