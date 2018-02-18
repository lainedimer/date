<?php
	require 'lib/class.date.php';

	$dataInicial = isset($_POST['dataInicial']) ? $_POST['dataInicial'] : NULL;
	$dataFinal = isset($_POST['dataFinal']) ? $_POST['dataFinal'] : NULL;
	$dias = isset($_POST['dia']) ? $_POST['dia'] : NULL;   
	$meses = isset($_POST['mes']) ? $_POST['mes'] : NULL;   
	$anos = isset($_POST['ano']) ? $_POST['ano'] : NULL;
	$optionFormat = isset($_POST['optionFormat']) ? $_POST['optionFormat'] : NULL;
	$optionFilter = isset($_POST['optionFilter']) ? $_POST['optionFilter'] : NULL;

	if(($optionFormat == "dateBr") ? "checked" : null){
		$radioSelecionado = 1;
	}else{
		$radioSelecionado = 0;
	}

	$date = new Date();	

	if(($optionFilter == "formatDate") ? "selected" : null){
		echo $date->formatDate($dataInicial, $radioSelecionado);
	}elseif (($optionFilter == "addDay") ? "selected" : null) {
		echo $date->addDay($dataInicial, $dias);
	}elseif (($optionFilter == "addMonth") ? "selected" : null) {
		echo $date->addMonth($dataInicial, $meses);
	}elseif (($optionFilter == "addYear") ? "selected" : null) {
		echo $date->addYear($dataInicial, $anos);
	}elseif (($optionFilter == "removeDay") ? "selected" : null) {
		echo $date->removeDay($dataInicial, $dias);
	}elseif (($optionFilter == "removeMonth") ? "selected" : null) {
		echo $date->removeMonth($dataInicial, $meses);
	}elseif (($optionFilter == "removeYear") ? "selected" : null) {
		echo $date->removeYear($dataInicial, $anos);
	}elseif (($optionFilter == "getDayOfWeek") ? "selected" : null) {
		echo $date->getDayOfWeek($dataInicial, $radioSelecionado);
	}elseif (($optionFilter == "dateDiffInFull") ? "selected" : null) {
		echo $date->dateDiffInFull($dataInicial, $dataFinal);
	}	

?>