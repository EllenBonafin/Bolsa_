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
    <h1>ANEXO VI</h1>
    <h2>FORMULÁRIO ESPECÍFICO PARA ATIVIDADES DE EXTENSÃO</h2>
    <h3>MODALIDADE EVENTO</h3>

        <div class="dados">
            <p>Nome:
            <?php
            //Declare the array
            //Prints the array

                echo $_POST["name"] . "\n";
            ?>
            </p>
            <p>Nome do Coordenador:
            <?php
            //Declare the array
            //Prints the array

                echo $_POST["coordenador"] . "\n";
            ?>
            </p>

            <p>Periodo de realização:
            <?php
            //Declare the array
            //Prints the array
                echo $_POST["periodo"] . "\n";
            ?>
            </p>

            <p>
            Esta atividade faz parte de algum PROGRAMA Extensão?
            <?php
                foreach ($_POST['escolha'] as $selectedOption)
                echo $selectedOption."\n";
                        
            ?>
            </p>

            <p> O programa pertence a
            <?php
            //Declare the array
            //Prints the array
                echo $_POST["qual"] . "\n";
            ?>
            atividade
            </p>


            <p> 
            Coordenador a do PROGRAMA:
            <?php
                echo $_POST["name-coordenador"] . "\n";
                        
            ?>
            </p>

            <p> Esta Atividade de Extensão está articulada 
            <?php
                foreach ($_POST['escolha2'] as $selectedOption)
                echo $selectedOption."\n";
                        
            ?></p>

            <p> Unidade Adiministrativa: 
            <?php
                foreach ($_POST['escolha3'] as $selectedOption)
                echo $selectedOption."\n";
                        
            ?></p>

            <p> Campus: 
            <?php
                foreach ($_POST['escolha4'] as $selectedOption)
                echo $selectedOption."\n";
                        
            ?></p>

            <p> Centro: 
            <?php
                foreach ($_POST['escolha5'] as $selectedOption)
                echo $selectedOption."\n";
                        
            ?></p>

            <p> Deu OKKKKKKKKKKKKKKKKKKKKKKKKK: 
            <?php
                foreach ($_POST['escolha6'] as $selectedOption)
                echo $selectedOption."\n";
                        
            ?></p>

            <p>Palavras-Chave:
                Nome:
            <?php
                echo $_POST["name_"] . "\n";
            ?>
            </p>

            <p>Coordenador1:
            <?php
                echo $_POST["coordenador_"] . "\n";
            ?>
            </p>

            
            <p>Coordenador2:
            <?php
                echo $_POST["coordenador2_"] . "\n";
            ?>
            </p>



            <p> Deu 2: 
            <?php
                foreach ($_POST['escolha7'] as $selectedOption)
                echo $selectedOption."\n";
                        
            ?></p>

            <p> Deu 3:     
            <?php
                foreach ($_POST['escolha8'] as $selectedOption)
                echo $selectedOption."\n";
                        
            ?></p>
         
         <p> Deu 4: 
            <?php
                foreach ($_POST['escolha9'] as $selectedOption)
                echo $selectedOption."\n";
                        
            ?></p>
        </div>
    </div>

</body>
</html>
