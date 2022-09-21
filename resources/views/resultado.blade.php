<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="painel">
        <h2>Resultado Cálculo de Consumo </h2>
        <div class="conteudo-painel">
            <div class="sucesso">
                <h3>O valor total gasto será de</h3>
                <ul>
                    <li><b>{{$combustivel}}:</b>R$ {{$valor}}</li>
                </ul>
            </div>
            <a class="botao" href="{{url('/')}}" title="voltar">Voltar</a>
        </div>
    </div>
</body>
</html>