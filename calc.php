<?php
	$numberOne = $_GET['numberOne'] ?? null;
	$numberTwo = $_GET['numberTwo'] ?? null;
	$action = $_GET['action'] ?? null;
	$arrNumberOne = str_split($numberOne,1);
	$arrNumberTwo = str_split($numberTwo,1);
	$numberOne = filter_input(INPUT_GET,'numberOne', FILTER_VALIDATE_FLOAT);
	$numberTwo = filter_input(INPUT_GET,'numberTwo', FILTER_VALIDATE_FLOAT);


	if (!isset($_GET)) {
		return "Значения не переданы";
	}
	if ($action === null) {
		return "Не передана операция";
	}
	if ($numberOne === null || $numberTwo === null) {
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