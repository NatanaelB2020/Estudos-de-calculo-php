<?php

$kilometro = $_POST['kilometro'];
$litros = $_POST['litros'];


$mensagem = "";

if (is_numeric($kilometro) && is_numeric($litros)){
        if (($kilometro > 0) && ($litros > 0)) {
            $km_litros = ($kilometro / $litros);
            $km_litros = number_format($km_litros,2,'.','.');


            $mensagem.= "<div class='sucesso'>";
			$mensagem.= "O valor total gasto será de:";
			$mensagem.= "<ul>";
			$mensagem.= "<li><b>Kilometros por litro:</b>".$km_litros."</li>";
			$mensagem.= "</ul>";
			$mensagem.= "</div>";
      }
        } else {
        $mensagem.= "<div class='erro'>";
        $mensagem.= "<b>O valor da distância e da autonomia deve ser maior que zero.</b>";
        $mensagem.= "</div>";
        }
?>

<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>calculo de Kilometros por litro</title>
	    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
        <body>
	        <main>
		        <div class="painel">
			        <h2>Resultado do cálculo de consumo</h2>
			        <div class="conteudo-painel">
			    	    <?php
				        echo $mensagem;
				        ?>
				        <a class="botao" href="index.php">Voltar</a>
			        </div>
		        </div>
	        </main>
        </body>
</html>