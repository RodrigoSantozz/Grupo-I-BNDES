<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Agendamento Sus Emergencia</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
   
<div class="container">
    <div class="content first-content"> 
                <div class="primeira-coluna">
                    <h2 class="tittle tittle-primeiro">Atendimento Cadastrado</h2>
                    <p class="descricao">Apresente essas informações na unidade do SUS </p>
                    <p class="descricao">

 <div class="descricao">
<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$hospEscolha = "<script>document.write(hospEscolha)</script>"

echo "<b>Nome:</b>  $nome <br/> <b>CPF:</b> $cpf";
?>
  
</div>

                
                </div>


            
            <div class="segunda-coluna">
                <h2 class="tittle tittle-segundo">Seu código de atendimento é:</h2>
                    <p>DZX56789</p>    
                     <img src="Imagens/qrcode.png" alt="">                
                    <h3 align="center"> Unidade com menor fila próximo a você:</h3> 
                    echo $hospEscolha;
                    <div id="write">

                   
                    




        </div>




</div>
</div></div>

</body>

</html>
