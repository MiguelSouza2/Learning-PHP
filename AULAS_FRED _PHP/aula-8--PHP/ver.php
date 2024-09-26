<?php

session_start();

$array_usernames = array(
    md5("fred"),
    md5("miguel"),
    md5("jubs"),
    md5("luiz"),
    md5("ramon"),
    md5("diego"),
    md5("vinicius")
);

$array_passwords = array(
    md5("123456"),
    md5("abcdef"),
    md5("qwerty")
);

$array_emails = array(
    md5("fred@example.com"),
    md5("miguel@example.com"),
    md5("jubs@example.com"),
    md5("luiz@example.com"),
    md5("diego@example.com"),
    md5("vinicius@example.com")
);

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

if (isset($username, $password, $email)) {
    $hashusername = md5(strtolower($username));
    $hashpassword = md5(strtolower($password));
    $hashemail = md5(strtolower($email));



    if (in_array($hashusername, $array_usernames)) {

        if (in_array($hashpassword, $array_passwords) && in_array($hashemail, $array_emails)) {
            header("Location: main.php");
            $_SESSION['loggedin'] = true;
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            exit;
        } else {
            echo "Senha ou email inválidos";
        }

    } else {
        echo "Username inválido";
    }
}

