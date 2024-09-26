<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>
<body>
    <?php 
        $nome = $_POST["campo_nome"];
        $cidade = $_POST["campo_cidade"];
    ?>
    <h1>Resultado: </h1>
    a pessoa se chama <b><?php echo $nome ?></b> e mora na cidade <b><?php echo $cidade?></b>.
</body>
</html>