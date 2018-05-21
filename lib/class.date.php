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
			if(count(explode("/",$dataInicial)) > 1){
				$quebrarDatas = explode("/", $dataInicial);
				$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[0]) + $dias, intval($quebrarDatas[2])));			
			}elseif(count(explode("-",$dataInicial)) > 1){
				$quebrarDatas = explode("-", $dataInicial);
				$dataNova = date('Y-m-d', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[2]) + $dias, intval($quebrarDatas[0])));			
			}			
			return $dataNova;
		}

		function addMonth($dataInicial, $meses)
		{   
			if(count(explode("/",$dataInicial)) > 1){
				$quebrarDatas = explode("/", $dataInicial);
				$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]) + $meses, intval($quebrarDatas[0]), intval($quebrarDatas[2])));
			}elseif(count(explode("-",$dataInicial)) > 1){
				$quebrarDatas = explode("-", $dataInicial);
				$dataNova = date('Y-m-d', mktime(0,0,0, intval($quebrarDatas[1]) + $meses, intval($quebrarDatas[2]), intval($quebrarDatas[0])));			
			}
			return $dataNova;
		}

		function addYear($dataInicial, $anos)
		{   
			if(count(explode("/",$dataInicial)) > 1){
				$quebrarDatas = explode("/", $dataInicial);
				$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[0]), intval($quebrarDatas[2]) + $anos));
			}elseif(count(explode("-",$dataInicial)) > 1){
				$quebrarDatas = explode("-", $dataInicial);
				$dataNova = date('Y-m-d', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[2]), intval($quebrarDatas[0])+ $anos));			
			}
			return $dataNova;
		}

		function removeDay($dataInicial, $dias)
		{   
			if(count(explode("/",$dataInicial)) > 1){
				$quebrarDatas = explode("/", $dataInicial);
				$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[1]) - $dias, intval($quebrarDatas[2])));
			}elseif(count(explode("-",$dataInicial)) > 1){
				$quebrarDatas = explode("-", $dataInicial);
				$dataNova = date('Y-m-d', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[2]) - $dias, intval($quebrarDatas[0])));			
			}
			return $dataNova;
		}

		function removeMonth($dataInicial, $meses)
		{   
			if(count(explode("/",$dataInicial)) > 1){
				$quebrarDatas = explode("/", $dataInicial);
				$dataNova = date('d/m/Y', mktime(0,0,0,intval($quebrarDatas[1]) - $meses, intval($quebrarDatas[0]), intval($quebrarDatas[2])));
			}elseif(count(explode("-",$dataInicial)) > 1){
				$quebrarDatas = explode("-", $dataInicial);
				$dataNova = date('Y-m-d', mktime(0,0,0, intval($quebrarDatas[1]) - $meses, intval($quebrarDatas[2]), intval($quebrarDatas[0])));			
			}
			return $dataNova;
		}

		function removeYear($dataInicial, $anos)
		{   
			if(count(explode("/",$dataInicial)) > 1){
				$quebrarDatas = explode("/", $dataInicial); 
				$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[0]), intval($quebrarDatas[2]) - $anos));
			}elseif(count(explode("-",$dataInicial)) > 1){
				$quebrarDatas = explode("-", $dataInicial);
				$dataNova = date('Y-m-d', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[2]), intval($quebrarDatas[0]) - $anos));			
			}
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
			if(count(explode("/",$dataInicial)) > 1 && $radioSelecionado == 1){
				setlocale(LC_TIME, 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				return strftime("%A", strtotime($dataInicial));
			}elseif(count(explode("/",$dataInicial)) > 1 && $radioSelecionado == 0){
				setlocale(LC_ALL, 'us', 'us.utf-8', 'us.utf-8');
				date_default_timezone_set('America/Los_Angeles');
				return strftime("%A", strtotime($dataInicial));
			}
		}
		function dateDiffInFull($dataInicial, $dataFinal){
			
			$dataInicial = date_create($dataInicial);
			$dataFinal = date_create($dataFinal);
			$intervalo = date_diff($dataInicial, $dataFinal);
			return $intervalo->format('%Y anos %M meses e %D dias');
		}
	}
?>
