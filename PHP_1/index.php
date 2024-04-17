<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <input type="text" name="a">
        <label for="a">aaa</label>
    </main>


    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo"Horário: " . date('G:i:s') . '<br> Data: ' . date('d:m:Y') . '<br> <br>';
        
        
        $alunos = array(
            'Mario', 'Miguel jose', 'Miguel Isack', 'VT' => 'Vitor Theodoro'
        );


        echo 'Hello ' . $alunos['VT'];
    ?>
</body>

</html>