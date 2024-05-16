<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="login.php" method="post">
        <div class="container p-3">
            <div class="d-flex flex-column">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>

            <div class="d-flex flex-column">
                <label for="email">email</label>
                <input type="text" name="email">
            </div>
            <div class="d-flex flex-column">
                <label for="password">password</label>
                <input type="password" name="password">
            </div>
            <button class="btn btn-primary mt-2 mb-2">submit</button>
            <a href="register-page.php">Already a member? Click here!</a>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>