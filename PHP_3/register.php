<<<<<<< HEAD
<?php 
session_start();

include("config/config.php");


if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    function validation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

//Definindo as variáveis
$username = validation($_POST['username']);
$password = validation($_POST['password']);
$email = validation($_POST['email']);


$con = 'INSERT INTO login(username, password, email) VALUES (' . $username . ', ' . $password .' , ' . $email .')';
=======
<?php


include ("config/config.php");

if (isset($_POST['username']) && ($_POST['password'])) {
    function validation($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
    $username = validation($_POST['username']);
    $password = validation($_POST['password']);

}

if (empty(trim($username)) || empty(trim($password)) || empty(trim($email))) {
    header('Location: register-page.php?error=there is an empty input');
} else {
    header("Location: main_page.php");
}
>>>>>>> 0f310e66a152882747c4da80d64dd74203fa6877
