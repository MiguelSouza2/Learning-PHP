<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>archives</title>
</head>

<body>

    <?php
    $path = "received/";
    $directory = dir($path);
    ?>
    <table border='1'>
        <tr>
            <td>Nome</td>
            <td>Ação</td>
        </tr>
        <?php while ($archive = $directory->read()) {
            if ($archive != '.' && $archive != '..') { ?>
                <tr>
                    <td><a href="<?php echo $path . $archive ?>"><?php echo $archive ?></a></td>
                    <td> <a href="delete.php?id=<?php echo $archive ?>">Excluir</a></td>
                </tr>
            <?php }
        } ?>
    </table>
    <?php $directory->close(); ?>

</body>

</html>