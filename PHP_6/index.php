<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-6</title>
</head>

<body>
    <?php
    $produto_codigo = 99;
    $produto_nome = "bolacha";

    ?>
    <a
        href="destino.php?id_produto_codigo=<?php echo $produto_codigo ?>&id_produto_nome=<?php echo $produto_nome ?>">exibir</a>
    </form>
</body>

</html>