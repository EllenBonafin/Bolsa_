<?php

require 'arquivo.php';

$dados = Handler::arrayHandler();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
    <h1> ANEXO VI</h1>
    <h2>FORMULÁRIO ESPECÍFICO PARA ATIVIDADES DE EXTENSÃO</h2>
    <h3>MODALIDADE EVENTO</h3>

        <div class="dados">
            <p>Nome:<?php if(isset($_GET['name'])): ?>
            Your name is <?php echo $_GET["name"]; ?>
            <?php endif; ?>
            </p>
        </div>
    </div>
    


</body>
</html>