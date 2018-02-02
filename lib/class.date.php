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
			$mes = NULL;
			$ano = '';
			list($dia, $mes, $ano) = $quebrarDatas;
			$dataNova = date('d/m/Y', mktime(0,0,0, int($mes), int($dia) + $dias, int($ano)));
			return $dataNova;
		}

		function somarMes($dataInicial, $meses)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			list($dia, $mes, $ano) = $quebrarDatas;
			$dataNova = date('d/m/Y', mktime(0,0,0, $mes + $meses, $dia, $ano));
			return $dataNova;
		}

		function somarAno($dataInicial, $anos)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			list($dia, $mes, $ano) = $quebrarDatas;
			$dataNova = date('d/m/Y', mktime(0,0,0, $mes, $dia, $ano + $anos));
			return $dataNova;
		}

		function removerData($dataInicial, $dias)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			list($dia, $mes, $ano) = $quebrarDatas;
			$dataNova = date('d/m/Y', mktime(0,0,0, $mes, $dia - $dias, $ano));
			return $dataNova;
		}

		function removerMes($dataInicial, $meses)
		{   
			$quebrarDatas = explode("/", $dataInicial);
			list($dia, $mes, $ano) = $quebrarDatas;
			$dataNova = date('d/m/Y', mktime(0,0,0, $mes - $meses, $dia, $ano));
			return $dataNova;
		}

		function removerAno($dataInicial, $anos)
		{   
			$quebrarDatas = explode("/", $dataInicial); 
			list($dia, $mes, $ano) = $quebrarDatas;
			$dataNova = date('d/m/Y', mktime(0,0,0, $mes, $dia, $ano - $anos));
			return $dataNova;
		}


		function inverteData($dataInicial){    

			if(count(explode("/",$dataInicial)) > 1){
				return implode("-",array_reverse(explode("/",$dataInicial)));         
			}elseif(count(explode("-",$dataInicial)) > 1){
				$dataInicial[0] = $dia + $data_inicial[0];
				return implode("/",array_reverse(explode("-",$dataInicial)));
			}
		}
		function getDayOfWeek($dataInicial){
	    // fazer um IF para verificar qual esta selecionado, BR ou EUA
			setlocale(LC_TIME, 'portuguese'); 
			date_default_timezone_set('America/Sao_Paulo');
			return strftime("%A", strtotime($dataInicial));
		}
		function dateDiffPorExtenso($dataInicial, $data_final){
			$dataInicial = date_create($dataInicial);
			$data_final = date_create($data_final);
			$intervalo = date_diff($dataInicial, $data_final);
			return $intervalo->format('%Y anos %M meses e %D dias');
		}
	}
?>
