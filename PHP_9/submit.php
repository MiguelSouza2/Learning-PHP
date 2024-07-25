<?php 

if(!empty($_POST["name"]) && !empty($_POST["city"]) && !empty($_POST["number"])){
    $name = $_POST["name"];
    $city = $_POST["city"];
    $number = (int)$_POST["number"];
}

for($i = 0; $i < $number; $i++){
    echo "O aluno " . $name . " mora na cidade " . $city . "\n";
}