<?php
if (isset($_POST["username"]) && $_POST["name"] && $_POST["password"] && $_POST["email"]) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    $credentials = array($username, $password, $name, $email);

    try {
        // Usando implode para juntar os valores do array em uma string separada por espaços
        $credentials_string = implode("|", $credentials);
        
        // Redireciona para a main_page.php com a string das credenciais
        header("Location: main_page.php?credentials=" . urlencode($credentials_string));
        exit(); // Certifique-se de que o script termina aqui
    } catch (Exception $e) {
        // Trate possíveis erros aqui
        echo "Ocorreu um erro: " . $e->getMessage();
    }
}
