<?php



//Validação dos caracteres
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    function validation($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //Definindo as variáveis
    $username = validation($_POST['username']);
    $password = validation($_POST['password']);
    $email = validation($_POST['email']);

}


//Se estiver vazio, retorne o erro
if (empty(trim($username)) || empty(trim($password)) || empty(trim($email))) {
    header('Location: index.php?error=there is an empty input');
} else {
    header("Location: main_page.php");
}
