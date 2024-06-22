<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if(!(empty($_GET['campo_nome']) || empty($_GET['campo_cidade']))){
        $nome = $_GET['campo_nome'];
        $cidade = $_GET['campo_cidade'];
    }
    
    ?>
    <form action="" method="GET">
        <label for="campo_nome">Nome</label>
        <input type="text" name="campo_nome" id="campo_nome">

        <label for="campo_cidade">Nome</label>
        <input type="text" name="campo_cidade">
        <input type="submit">


        <h1>Resultado: </h1>
        <?php 
            if(!(empty($_GET['campo_nome']) || empty($_GET['campo_cidade']))){
                echo 'a pessoa se chama <b>' . $nome . '</b> e mora na cidade <b>' . $cidade . ' <b>';
            }
        ?>
        
        
    </form>
</body>

</html>