<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Conversao de datas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body class="container">

    <h1 class="text-center">Conversao</h1>
    
    <form class="form" action="test.php" method="post">

    <div class="row">
        <div class="form-group col-2">
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="dateBr" id="data_inicial1" value="option1">BR
                </label>
            </div>
        </div>
        <div class="form-group col-2">
            <div class="form-check">
                <label class="form-check-label">
                   <input class="form-check-input" type="radio" name="dateEua" id="data_inicial2" value="option2">EUA
                </label>
            </div>
        </br>
        </div> 
    </div>  

    <div class="form-group">
        <label for="dia">Data</label>
        <input type="text" name="dataInicial" class="form-control" required autofocus/>        
    </div>
    <div class="form-group">
        <label for="dia">Data Final</label>
        <input type="text" name="dataFinal" class="form-control" required autofocus/>        
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

</body>
</html>

