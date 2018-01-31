<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Conversao de datas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body class="container">

    <h1 class="text-center">Conversao</h1>
    
    <form class="form" action="index.php" method="post">

    <div class="row">
        <div class="form-group col-2">
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="date_br" id="data_inicial1" value="option1" checked>BR
                </label>
            </div>
        </div>
        <div class="form-group col-2">
            <div class="form-check">
                <label class="form-check-label">
                   <input class="form-check-input" type="radio" name="date_eua" id="data_inicial2" value="option2">EUA
                </label>
            </div>
        </br>
        </div> 
    </div>  

    <div class="form-group">
        <label for="dia">Data</label>
        <input type="text" name="data_inicial" class="form-control" required autofocus/>        
    </div>
    <div class="form-group">
        <label for="dia">Data Final</label>
        <input type="text" name="data_final" class="form-control" required autofocus/>        
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="dia">Dia</label>
                <input type="text" name="dia" class="form-control" required autofocus/>        
            </div> 
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="dia">Mes</label>
                <input type="text" name="mes" class="form-control" required autofocus/>        
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="dia">Ano</label>
                <input type="text" name="ano" class="form-control" required autofocus/>        
            </div>
        </div>  
    </div>

    <button class="btn btn-primary" type="submit">Alterar</button>
    </form>


<?php
$data_inicial = isset($_POST['data_inicial']) ? $_POST['data_inicial'] : '';
$data_final = isset($_POST['data_final']) ? $_POST['data_final'] : '';
$dias = isset($_POST['dia']) ? $_POST['dia'] : '';   
$meses = isset($_POST['mes']) ? $_POST['mes'] : '';   
$anos = isset($_POST['ano']) ? $_POST['ano'] : '';   

function somarData($data_inicial, $dias)
{   
    $quebrarDatas = explode("/", $data_inicial);
    list($dia, $mes, $ano) = $quebrarDatas;
    $dataNova = date('d/m/Y', mktime(0,0,0, $mes, $dia + $dias, $ano));
    return $dataNova;
}

function somarMes($data_inicial, $meses)
{   
    $quebrarDatas = explode("/", $data_inicial);
    list($dia, $mes, $ano) = $quebrarDatas;
    $dataNova = date('d/m/Y', mktime(0,0,0, $mes + $meses, $dia, $ano));
    return $dataNova;
}

function somarAno($data_inicial, $anos)
{   
    $quebrarDatas = explode("/", $data_inicial);
    list($dia, $mes, $ano) = $quebrarDatas;
    $dataNova = date('d/m/Y', mktime(0,0,0, $mes, $dia, $ano + $anos));
    return $dataNova;
}

function removerData($data_inicial, $dias)
{   
    $quebrarDatas = explode("/", $data_inicial);
    list($dia, $mes, $ano) = $quebrarDatas;
    $dataNova = date('d/m/Y', mktime(0,0,0, $mes, $dia - $dias, $ano));
    return $dataNova;
}

function removerMes($data_inicial, $meses)
{   
    $quebrarDatas = explode("/", $data_inicial);
    list($dia, $mes, $ano) = $quebrarDatas;
    $dataNova = date('d/m/Y', mktime(0,0,0, $mes - $meses, $dia, $ano));
    return $dataNova;
}

function removerAno($data_inicial, $anos)
{   
    $quebrarDatas = explode("/", $data_inicial); 
    list($dia, $mes, $ano) = $quebrarDatas;
    $dataNova = date('d/m/Y', mktime(0,0,0, $mes, $dia, $ano - $anos));
    return $dataNova;
}


function inverteData($data_inicial){    

    if(count(explode("/",$data_inicial)) > 1){
        return implode("-",array_reverse(explode("/",$data_inicial)));         
    }elseif(count(explode("-",$data_inicial)) > 1){
        $data_inicial[0] = $dia + $data_inicial[0];
        return implode("/",array_reverse(explode("-",$data_inicial)));
    }
}
function getDayOfWeek($data_inicial){
    // fazer um IF para verificar qual esta selecionado, BR ou EUA
    setlocale(LC_TIME, 'portuguese'); 
    date_default_timezone_set('America/Sao_Paulo');
    return strftime("%A", strtotime($data_inicial));
}
function dateDiffPorExtenso($data_inicial, $data_final){
    $data_inicial = date_create($data_inicial);
    $data_final = date_create($data_final);
    $intervalo = date_diff($data_inicial, $data_final);
    return $intervalo->format('%Y anos %M meses e %D dias');
}

somarData($data_inicial, $dias);   //OK
somarMes($data_inicial, $meses);   //OK
somarAno($data_inicial, $anos);    //OK
inverteData($data_inicial);        //OK
removerData($data_inicial, $dias); //OK
removerMes($data_inicial, $meses); //OK
getDayOfWeek($data_inicial);       //OK
echo dateDiffPorExtenso($data_inicial, $data_final);

?>

</body>
</html>

