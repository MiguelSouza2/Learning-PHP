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

    <br><br>

    <form name="upload" enctype="multipart/form-data" method="post" action="upload.php">
        <input type="file" name="archive[]" multiple="multiple" />
        <input name="submit" type="submit" value="submit">
    </form>
</body>

</html>