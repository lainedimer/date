<?php
	require 'lib/class.date.php';

	$dataInicial = isset($_POST['dataInicial']) ? $_POST['dataInicial'] : NULL;
	$dataFinal = isset($_POST['dataFinal']) ? $_POST['dataFinal'] : NULL;
	$dias = isset($_POST['dia']) ? $_POST['dia'] : NULL;   
	$meses = isset($_POST['mes']) ? $_POST['mes'] : NULL;   
	$anos = isset($_POST['ano']) ? $_POST['ano'] : NULL;   

	$date = new Date();

	$date->somarData($dataInicial, $dias);
	$date->somarMes($dataInicial, $meses);
	$date->somarAno($dataInicial, $anos);
	$date->inverteData($dataInicial);
	$date->removerData($dataInicial, $dias);
	$date->removerMes($dataInicial, $meses);
	$date->getDayOfWeek($dataInicial);
	$date->dateDiffPorExtenso($dataInicial, $dataFinal);

?>