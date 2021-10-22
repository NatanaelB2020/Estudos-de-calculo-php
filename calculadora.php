<?php 
if($_POST) {
 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];
 $operators = $_POST['operators'];

$mensagem ='';

  if (is_numeric($num1) && is_numeric($num2)){
          if (($num1 > 0) && ($num2 > 0));

            if($operators=="Soma")
            $mensagem = $num1 + $num2;

            elseif($operators=="Subtração")
            $mensagem = $num1 - $num2 ;


            elseif($operators=="Multiplicação")
            $mensagem = ($num1*$num2);


            elseif($operators=="Divisão")
            $mensagem = ($num1/$num2);
                  
      } else {
        $mensagem.= "<div class='erro'>";
        $mensagem.= "<b>O valor deve ser maior que zero.</b>";
        $mensagem.= "</div>";
      }
    } else {
      $mensagem.= "<div class='erro'>";
      $mensagem.= "<b>O valor recebido não é numérico</b>";
      $mensagem.= "</div>";
    }
            

 ?>

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
			<h2>Resultado da Operação</h2>
			<div class="conteudo-painel">
				<?php
				echo $mensagem;
				?>
				<a class="botao" href="index.php">Voltar</a>
			</div>
		</div>
	</main>
</body>
</html