<?php


$array_usernames = array(
    md5("Fred"),
    md5("Miguel"),
    md5("Jubs"),
    md5("Luiz"),
    md5("Ramon"),
    md5("Diego"),
    md5("Vinicius")
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

if(isset($_POST["username"], $_POST["password"], $_POST["email"])) {
    $hashusername = md5($_POST["username"]);
    $hashpassword = md5($_POST["password"]);  
    $hashemail = md5($_POST["email"]);        

    
    if(in_array($hashusername, $array_usernames)) {
        
        if(in_array($hashpassword, $array_passwords) && in_array($hashemail, $array_emails)) {
            header("Location: main.php");
            exit;
        } else {
            echo "Senha ou email inválidos";
        }
    } else {
        echo "Username inválido";
    }
}

