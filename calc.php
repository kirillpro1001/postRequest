<?php
	$numberOne = $_GET['numberOne'];
	$numberTwo = $_GET['numberTwo'];
	$action = $_GET['action'];

	if (!isset($_GET)) {
		return "Значения не переданы";
	}
	if (!isset($_GET['action'])) {
		return "Не передана операция";
	}
	if (!isset($numberOne) || !isset($numberTwo)) {
		return "Не переданы аргументы";
	}

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
?>