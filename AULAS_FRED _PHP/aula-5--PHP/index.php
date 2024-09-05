<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array pt.2</title>
</head>

<body>

    <?php
        // Array map

        function add($array){
            return $array . ", ";
        }

        $names = array("Joao","Maria","Jose","Luiz","Mario","Pedro");

        print_r(array_map("add", $names));

        echo "<br>";
        // Array push adiciona um elemento no final do array

        array_push($names,"Leandro");

        print_r($names);

        echo "<br>";
        // Array pop remove o último elemento do array

        array_pop($names);

        print_r($names );

        echo "<br>";

        // Array shift remove o primeiro elemento do array

        array_shift($names);
        print_r($names);

        echo "<br>";

        // Array unshif adiciona um ou mais como primeiro elemento do array
        array_unshift($names, "Jefferson");
        print_r($names);

        echo "<br>";

        // Array splice remove um ou mais elementos do array

        array_splice($names,1, 2);
        print_r($names);

?>

</body>

</html>