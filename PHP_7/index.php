<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $nome = "robson";
    $idade = 12;
    $sexo = 'masculino';
    $peso = 64;
    $altura = 1.70;
    $imc = round($peso / ($altura * $altura), 2);





    ?>

    <a href="destino.php?id_nome=<?php echo $nome ?>&id_idade=<?php echo $idade ?>&id_sexo=<?php echo $sexo ?>&id_peso=<?php echo $peso ?>&id_altura=<?php echo $altura ?>&id_imc=<?php echo $imc ?>"">submit</a>

   
</body>

</html>