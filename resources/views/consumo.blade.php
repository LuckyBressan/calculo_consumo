<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
    <title>Calculo de Consumo de Combustível</title>
    
</head>
<body>
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Essa aplicação tem a finalidade de demonstrar os valores que serão gastos com combustivel (te vira)</p>
                <p>Os combustíveis:</p>
                <ul>
                    <li><b>Gasolina: R$ 4,99</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Calculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="{{url('/gasto')}}" method="get">
                    <label for="distancia">Distância em Km a ser percorrido</label>
                    <input type="number" class="campoTexto" name="distancia" required>

                    <label for="autonomia">Consumo de combustivel do veículo (Km/l)</label>
                    <input type="number" class="campoTexto" name="autonomia" required>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>