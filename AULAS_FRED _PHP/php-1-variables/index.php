<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - aula 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h2>Jeito errado</h2>
    <?php

    // echo é uma declaração, já print(), uma função que retorna um valor
    $cidade = "Registro";
    $nome = "Miguel";
    
    echo "
    <table class='table table-striped table-hover'>
        <thead>
            <tr>
                <td>Nome</td>
                <td>$nome</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cidade</td>
                <td>$cidade</td>
            </tr>
        </tbody>
    </table>"
        ?>

        <br>
        <h2>Jeito certo</h2>

        <table class='table table-striped table-hover'>
        <thead>
            <tr>
                <td>Nome</td>
                <td><?php echo $nome?></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cidade</td>
                <td><?php echo $cidade?></td>
            </tr>
        </tbody>
    </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>