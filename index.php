<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo, e com a distância determinada por você!</p>
                <p>Os combustíveis disponíveis para este cálculo são:</p>
                <ul>
                    <li><b>Álcool</b></li>
                    <li><b>Díesel</b></li>
                    <li><b>Gasolina</b></li>

                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">
                    <label for="distancia">Distância em Quilômetros a ser percorrida</label>
                    <input type="number" class="campoTexto" name="distancia" required/>

                    <label for="autonomia">Consumo de combustível do veículo (Km/l)</label>
                    <input type="number" class="campoTexto" name="autonomia" required/>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>

        <div class="painel">
            <h2>Autonomia de litro por Kilometros </h2>
            <div class="conteudo-painel">
                <form action="km-por-litro.php" method="POST">
                    <label for="kilometro">Distância em Quilômetros percorrida</label>
                    <input type="number" class="campoTexto" name="kilometro" required/>

                    <label for="litros">Litros de compustivel abastecido</label>
                    <input type="number" class="campoTexto" name="litros" required/>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>

        <div class="painel">
            <h2>Calculadora</h2>
            <div class="conteudo-painel">
                <form action="calculadora.php" method="POST">

                    <label for="num1">Primeiro numero</label>
                    <input type="number" name="num1" required/>

                    <br><label for="num2">Segundo numero</label>
                    <input type="number" name="num2" required/>

                    <br><select name="operators">
					<option>Soma</option>
					<option>Subtração</option>
					<option>Divisão</option>
					<option>Multiplicação</option>
				</select>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>