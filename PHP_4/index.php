<?php
    require('UserInfo.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting user info</title>
</head>
<body>
    <center>I just stole your ip ;)</center>
    <h1><?= UserInfo::get_ip(); ?></h1>
    <h1><?= UserInfo::get_browser(); ?></h1>
    <h1><?= UserInfo::get_device(); ?></h1>
    <h1><?= UserInfo::get_os(); ?></h1>
</body>
</html>


// THANKS TO marufhasan1 :)
// https://github.com/marufhasan1