<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <?php
        session_start();
        if (!isset($_COOKIE['loggedin']) || $_COOKIE['loggedin'] !== "1") { 
            header("Location: index.php"); 
            exit(); 
        } else {
            $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : 'Guest';
            $password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
            $email = isset($_COOKIE['email']) ? $_COOKIE['email'] : '';
        }
    ?>
</head>
<body>
    
    <div>
        <h1>Bem-vindo <?php echo htmlspecialchars($username); ?>!</h1> 
        <p>Welcome to our cookie store! Please select your favorite type of cookie:</p>
        <form id="cookieForm" action="ver_cookie.php" method="post">
            <label for="type">Type of Cookie:</label>
            <select id="type" name="type">
                <option value="chocolate chip">Chocolate Chip</option>
                <option value="sugar cookie">Sugar Cookie</option>
                <option value="oatmeal raisin">Oatmeal Raisin</option>
            </select>
            <br><br>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="10">
            
            <br><br>
            <button>submit</button>
        </form>
    </div>
</body>
</html>
