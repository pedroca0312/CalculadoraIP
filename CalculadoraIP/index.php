<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function(){
        $("#resultados").hide();

        $("#btcalcular").click(function(){
            $("#resultados").show("slow");
        });

        $('#btcalcular').click(function(){
            $.post("CalculadoraIP.php",
                {
                    oc1: $('input[name=oc1]').val(),
                    oc2: $('input[name=oc2]').val(),
                    oc3: $('input[name=oc3]').val(),
                    oc4: $('input[name=oc4]').val(),
                    mascara: $('input[name=bits]').val()
                },function (resultado) {
                    $("#resultados").html(resultado);
                }

            );
        });

    });

</script>
    <meta charset="utf-8">
</head>


<body>

<table>
    <tr>
        <td><img src="img/ip.png"/></td>

        <td><h1>Calculadora IP</h1></td>
    </tr>

</table>

<div id="formulario" class="form-row">
    <div class="col">
        <input type="number" class="form-control" name="oc1">
    </div>
    .
    <div class="col">
        <input type="number" class="form-control" name="oc2">
    </div>
    .
    <div class="col">
        <input type="number" class="form-control" name="oc3">
    </div>
    .
    <div class="col">
        <input type="number" class="form-control" name="oc4">
    </div>
    /
    <div class="col">
        <input type="number" class="form-control" name="bits">
    </div>
        <button id="btcalcular" class="btn btn-success">Calcular</button>

</div>
<br><br><br>
<div id="resultados">

    
</div>


</body>
</html>