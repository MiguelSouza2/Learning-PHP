<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("Location: index.php"); 
        exit(); 
    }
    else{
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $email = $_SESSION['email'];
        echo "Olá, $username! Você está logado.";
        echo "<br>Seu email é: $email";
        echo "<br>Seu password: $password";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main page</title>
</head>
<body>
    

<button><a href="logout.php"></a></button>
</body>
</html>