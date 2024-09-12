<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- CRIPTOGRAFAR -->
    <?php 
        $cript = "Centro Paula Souza";

        // Codificar com base64
        $encoded = base64_encode($cript);
        echo "<b>Texto original</b>: ". $cript. "<br>";
        echo "<b>Texto codificado</b>: ". $encoded. "<br>";

        // Decodificar
        $decoded = base64_decode($encoded);
        echo "<b>Texto decodificado</b>: ". $decoded. "<br><br>";

        // Criptografar com md5 (num da pra descriptografar)
        $encryptedHash = md5($cript);
        echo "<b>Texto original</b>: ". $cript. "<br>";
        echo "<b>Texto criptografado</b>: ". $encryptedHash. "<br>";
        
        

    ?>
</body>
</html>