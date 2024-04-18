<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php

        // Operadores condicionais if-else
        
        $cidade = 'Registro';

        if ($cidade == 'Registro') {
            echo 'sua cidade é Registro!';
        } else if ($cidade == 'Sete Barras') {
            echo 'Sua cidade é Sete Barras!';
        } else {
            echo 'Você digitou outra cidade';
        }
        ?>

    </div>
    <div>
        <?php
        
        // Usando estrutura condicional alinhada
        $pais = "Argentina";
        $uf = "São Paulo";
        $cidade = "Registro";

        if ($pais == "Brasil") {

            if ($uf == "São Paulo") {
                echo 'Você selecionou a UF São Paulo ';

                if ($cidade == "Registro") {
                    echo 'e a cidade de Registro';
                } else if ($cidade == "Sete Barras") {
                    echo 'e a cidade de Sete Barras';
                } else {
                    echo 'e uma cidade inválida';
                }
            } else if ($uf == "Paraná") {
                echo 'Você selecionou a UF Paraná';
                if ($cidade == "Paraná") {
                    echo 'e a cidade de Curitiba';
                } else if ($cidade == "Quatro Barras") {
                    echo 'e a cidade de Quatro Barras';
                } else {
                    echo 'e uma cidade inválida';
                }
            } else {
                echo 'Digite uma UF válida!';
            }

        } else if ($pais == "Argentina") {

            if ($uf == "Buenos Aires") {
                echo 'Você selecionou a UF Argentina';

                if ($cidade == "Azul") {
                    echo 'e a cidade de Azul';
                } else if ($cidade == "Balcarce") {
                    echo 'e a cidade de Balcarce';
                } else {
                    echo 'e uma cidade inválida';
                }
            } else if ($uf == "Santa fé") {
                echo 'Você selecionou a UF Santa fé';
                if ($cidade == "Córdova") {
                    echo 'e a cidade de Córdova';
                } else if ($cidade == "Cidade Autônoma de Buenos Aires") {
                    echo 'e a cidade de Cidade Autônoma de Buenos Aires';
                } else {
                    echo 'e uma cidade inválida';
                }
            } else {
                echo 'Digite uma UF válida!';
            }
        }
        ?>
    </div>
</body>

</html>