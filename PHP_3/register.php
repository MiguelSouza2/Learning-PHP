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