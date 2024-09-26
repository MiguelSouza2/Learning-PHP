<?php
$txt = $_POST['text'];

if (isset($txt)) {
    $hashtxt = md5($txt);
}