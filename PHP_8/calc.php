<?php

if (isset($_POST['num1']) && ($_POST['num2'])) {
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);

    $result = $num1 + $num2;

    echo $num1 . '+' . $num2 . '=' . $result;
}