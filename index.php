<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Date Converter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />


</head>

<body class="container">

    <h1 class="text-center">Conversion</h1>

    <form class="form" action="index.php" method="post">

    <div class="row">
        <div class="form-group col-2">
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="optionFormat" id="data_inicial1" value="dateBr" autofocus>BR
                </label>
            </div>
        </div>
        <div class="form-group col-2">
            <div class="form-check">
                <label class="form-check-label">
                   <input class="form-check-input" type="radio" name="optionFormat" id="data_inicial2" value="dateEua">EUA
                </label>
            </div>
        </br>
        </div>
    </div>

    <div class="form-group">
        <label for="dia">Selecione uma data</label>
        <input type="text" name="dataInicial" class="form-control" id="calendario"/>

    </div>
    <div>
        <label for="result">Resultado: </label>
        <?php include "test.php";?>

    </div>
    <div class="form-group">
        <label for="dia">Data Final</label>
        <input type="text" name="dataFinal" class="form-control"/>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="dia">Dia</label>
                <input type="text" name="dia" class="form-control"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="dia">Mes</label>
                <input type="text" name="mes" class="form-control"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="dia">Ano</label>
                <input type="text" name="ano" class="form-control"/>
            </div>
        </div>
    </div>
    </br>
    <p class="text-left">Escolha uma opcao:</p>
    <select class="form-control" name="optionFilter" id="options">
        <option value="formatDate">Format date</option>
        <option value="addDay">Add day</option>
        <option value="addMonth">Add month</option>
        <option value="addYear">Add year</option>
        <option value="removeDay">Remove day</option>
        <option value="removeMonth">Remove month</option>
        <option value="removeYear">Remove year</option>
        <option value="getDayOfWeek">Get day of week</option>
        <option value="dateDiffInFull">Date difference in full</option>
    </select></br>

    <button class="btn btn-primary" type="submit">Convert</button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
    <script >
    $(function() {
      $( "#calendario" ).datepicker()
    });
    </script>
</body>
</html>
