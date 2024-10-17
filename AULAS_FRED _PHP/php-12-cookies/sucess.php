<?php
session_start(); 

if (isset($_SESSION['type'], $_SESSION['quantity'], $_COOKIE['username'])) {
    $type = $_SESSION['type'];
    $quantity = $_SESSION['quantity'];
    $name = $_COOKIE['username'];
} else {
    header("Location: index.php");
    exit();
}
?>

<h1>Pedido Realizado com Sucesso!</h1>
<p>Obrigado, <?php echo htmlspecialchars($name); ?>. Você pediu <?php echo $quantity; ?> <?php echo htmlspecialchars($type); ?> cookie(s).</p>
