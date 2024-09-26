<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    // FUNÇÕES DO ARRAY NO PHP
    // IMPLODE, COUNT, MAP, POP, PUSH, SHIFT
    
    $progamming_lang = array(
        "JavaScript", "PHP", "Python", "C#", "Java", "C++", "C", "Ruby", "Swift", "Go",
        "Kotlin", "R", "TypeScript", "Perl", "Scala", "Rust", "Dart", "Elixir", "Haskell", "MATLAB"
    );

    // Mostrando os valores do array utilizando *implode()* para concatenar os valores
    echo implode(", ", $progamming_lang);

    // Mostrando os valores do array utilizando *count()* para definir os limites do for
    for($i = 0; $i < count($progamming_lang); $i++){
        echo $progamming_lang[$i] . "<br>";
    }

    


    ?>
</body>

</html>