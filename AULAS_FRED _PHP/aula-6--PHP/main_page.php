<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
</head>
<body>
<?php
        if(isset($_GET["credentials"])){
            $credentials = explode("|", $_GET["credentials"]);
            
            $username = $credentials[0];
            $password = $credentials[1];
            $name = $credentials[2];
            $email = $credentials[3];
        }
    ?>

    <h1>Welcome <?php echo $name;?>!</h1>   
    
    <p>Usuario: <?php echo $username?> </p><br><br>
    <p>Senha: <?php echo $password?> </p><br><br>
    <p>nome: <?php echo $name?> </p><br><br>
    <p>email: <?php echo $email?> </p><br><br>


    
</body>
</html>