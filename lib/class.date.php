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

		function somarData($dataInicial, $dias)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[0]) + $dias, intval($quebrarDatas[2])));			
			return $dataNova;
		}

		function somarMes($dataInicial, $meses)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]) + $meses, intval($quebrarDatas[0]), intval($quebrarDatas[2])));
			return $dataNova;
		}

		function somarAno($dataInicial, $anos)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[0]), intval($quebrarDatas[2]) + $anos));
			return $dataNova;
		}

		function removerData($dataInicial, $dias)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[1]) - $dias, intval($quebrarDatas[2])));
			return $dataNova;
		}

		function removerMes($dataInicial, $meses)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			$dataNova = date('d/m/Y', mktime(0,0,0,intval($quebrarDatas[1]) - $meses, intval($quebrarDatas[0]), intval($quebrarDatas[2])));
			return $dataNova;
		}

		function removerAno($dataInicial, $anos)
		{   
			$quebrarDatas = explode("/", $dataInicial); 
			$dataNova = date('d/m/Y', mktime(0,0,0, intval($quebrarDatas[1]), intval($quebrarDatas[0]), intval($quebrarDatas[2]) - $anos));
			return $dataNova;
		}


		function inverteData($dataInicial){    

			if(count(explode("/",$dataInicial)) > 1){
				return implode("-",array_reverse(explode("/",$dataInicial)));         
			}elseif(count(explode("-",$dataInicial)) > 1){
				$dataInicial[0] = $dia + $dataInicial[0];
				return implode("/",array_reverse(explode("-",$dataInicial)));
			}
		}
		function getDayOfWeek($dataInicial){
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
