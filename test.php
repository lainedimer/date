<?php
	require 'lib/class.date.php';

	$dataInicial = isset($_POST['dataInicial']) ? $_POST['dataInicial'] : NULL;
	$dataFinal = isset($_POST['dataFinal']) ? $_POST['dataFinal'] : NULL;
	$dias = isset($_POST['dia']) ? $_POST['dia'] : NULL;   
	$meses = isset($_POST['mes']) ? $_POST['mes'] : NULL;   
	$anos = isset($_POST['ano']) ? $_POST['ano'] : NULL;

	if(!empty($_POST['dateBr'])){
		$radioSelecionado = 1;
	}else{
		$radioSelecionado = 0;
	}

	$date = new Date();	

	// $date->somarData($dataInicial, $dias);
	// $date->somarMes($dataInicial, $meses);
	// $date->somarAno($dataInicial, $anos);
	echo $date->formatDate($dataInicial, $radioSelecionado);	
	// $date->removeDay($dataInicial, $dias);
	// $date->removeMonth($dataInicial, $meses);
	// $date->removeYear($dataInicial, $anos);
	// $date->getDayOfWeek($dataInicial, $radioSelecionado);
	// $date->dateDiffPorExtenso($dataInicial, $dataFinal);

?>