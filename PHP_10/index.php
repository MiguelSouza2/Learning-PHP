<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Manipulação de Arrays em PHP</title>
</head>

<body>

    <h1>Manipulação de Arrays em PHP</h1>

    <?php

    function adicionarExclamacao($item)
    {
        return $item . "!";
    }


    $array = ["Opa", "Tudo", "Bem"];


    $arrayComExclamacao = array_map("adicionarExclamacao", $array);
    echo "<h3>Array após array_map:</h3>";
    print_r($arrayComExclamacao);
    echo "<br>";


    $ultimoElemento = array_pop($array);
    echo "<h3>Array após array_pop (removido: $ultimoElemento):</h3>";
    print_r($array);
    echo "<br>";


    array_push($array, "Sim", "E você?");
    echo "<h3>Array após array_push:</h3>";
    print_r($array);
    echo "<br>";


    $numeroDeElementos = count($array);
    echo "<h3>Quantidade de elementos no array:</h3> $numeroDeElementos <br>";


    $stringImplode = implode(" ", $array);
    echo "<h3>Array após implode:</h3> $stringImplode <br>";


    $arr = explode(" ", $stringImplode);
    echo "<h3>String após explode:</h3>";
    print_r($arr);
    echo "<br>";


    $primeiroElemento = array_shift($arr);
    echo "<h3>Array após array_shift (removido: $primeiroElemento):</h3>";
    print_r($arr);
    echo "<br>";


    array_unshift($arr, "Opa", "De");
    echo "<h3>Array após array_unshift:</h3>";
    print_r($arr);
    echo "<br>";

    echo "<h3>Array após array_splice</h3>";
    array_splice($arr, 1, 5);
    print_r($arr);
    

    echo "<h3> Array após array_concat</h3>";
    $ay = array_fill(0, 1, "Estou bem");
    $arr = array_merge($arr, $ay);
    print_r($arr);
    ?>

</body>

</html>