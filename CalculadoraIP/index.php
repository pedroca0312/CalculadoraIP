<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
    $('#btcalcular').click(function(){
        $.get("ip.php",
            {
                oc1: $('input[name=oc1]').val(),
                oc2: $('input[name=oc2]').val(),
                oc3: $('input[name=oc3]').val(),
                oc4: $('input[name=oc4]').val(),
                mascara: $('input[name=bits]').val(),

            },
            function(dados){
                var txt = "mascara: " $dados,mascara;
                txt = "<br>Quantidade de endereços: " $dados,totalEnderecos;
                
                $("#resultados").html(txt);
            }
        )
    })

    })

</script>
    <meta charset="utf-8">
</head>


<body>

<form method="post">
    <input type="number" name="oc1">
    .
    <input type="number" name="oc2">
    .
    <input type="number" name="oc3">
    .
    <input type="number" name="oc4">
    /
    <input type="number" name="bits">

    <input type="submit" id="btcalcular">Calcular

</form>
</body>
</html>