<?php
	class Date
	{		
		/**
		* Manipulaçao de datas
		* subtrair periodos, somar dias, ano, mes
		* etc...
		* @since 02/02/18
		* @author Laine Dimer
		*/

		function addDay($dataInicial, $dias)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[0]) + $dias, intval($quebrarDatas[2])));			
			return $dataNova;
		}

		function addMonth($dataInicial, $meses)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]) + $meses, intval($quebrarDatas[0]), intval($quebrarDatas[2])));
			return $dataNova;
		}

		function addYear($dataInicial, $anos)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[0]), intval($quebrarDatas[2]) + $anos));
			return $dataNova;
		}

		function removeDay($dataInicial, $dias)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[1]) - $dias, intval($quebrarDatas[2])));
			return $dataNova;
		}

		function removeMonth($dataInicial, $meses)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			$dataNova = date('d/m/Y', mktime(0,0,0,intval($quebrarDatas[1]) - $meses, intval($quebrarDatas[0]), intval($quebrarDatas[2])));
			return $dataNova;
		}

		function removeYear($dataInicial, $anos)
		{   
			$quebrarDatas = explode("/", $dataInicial); 
			$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[0]), intval($quebrarDatas[2]) - $anos));
			return $dataNova;
		}


		function formatDate($dataInicial, $radioSelecionado){    

			if(count(explode("/",$dataInicial)) > 1 && $radioSelecionado == 0){
				return implode("-",array_reverse(explode("/",$dataInicial)));         
			}elseif(count(explode("-",$dataInicial)) > 1 && $radioSelecionado == 1){
				return implode("/",array_reverse(explode("-",$dataInicial)));
			}else{
				return $dataInicial;
			}
		}
		function getDayOfWeek($dataInicial,$radioSelecionado){
	    // fazer um IF para verificar qual esta selecionado, BR ou EUA
			setlocale(LC_TIME, 'portuguese'); 
			date_default_timezone_set('America/Sao_Paulo');
			return strftime("%A", strtotime($dataInicial));
		}
		function dateDiffPorExtenso($dataInicial, $dataFinal){
			$dataInicial = date_create($dataInicial);
			$dataFinal = date_create($dataFinal);
			$intervalo = date_diff($dataInicial, $dataFinal);
			return $intervalo->format('%Y anos %M meses e %D dias');
		}
	}
?>
