<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
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
<div id="formulario">

        <input type="number" name="oc1">
        .
        <input type="number" name="oc2">
        .
        <input type="number" name="oc3">
        .
        <input type="number" name="oc4">
        /
        <input type="number" name="bits">

        <button id="btcalcular">Calcular</button>

</div>

<div id="resultados">
    
    
</div>

</body>
</html>