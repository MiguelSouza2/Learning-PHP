<?php

$_GET["email"];


if ($_GET['email'] == 'juse' && $_GET['password'] == '123') {
    echo "email " . $_GET['email'] . " password: " . $_GET['password'];
} else {
    echo 'wrong';
}
