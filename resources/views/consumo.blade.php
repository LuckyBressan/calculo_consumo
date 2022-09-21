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
                
            </div>
        </div>

        <div class="painel">
            <h2>Calculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="{{url('/gasto')}}" method="get">
                    <label for="combustivel">Combustível:</label><br>
                    <select name="combustivel" class="campoTexto" id="combustivel">
                        <option value="00">**selecione**</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Etanol">Etanol</option>
                        <option value="Diesel">Diesel</option>
                    </select>
                    <label for="valorcombustivel">Valor:</label>
                    <input type="number" name="valorcombustivel" step="0.01" class="campoTexto" required>
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