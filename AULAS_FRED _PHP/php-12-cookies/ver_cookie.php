<?php
session_start(); 


if (isset($_POST['type'], $_POST['quantity'], $_POST['name'])) {
    
    
    $type = htmlspecialchars($_POST['type']);
    $quantity = (int) $_POST['quantity'];
    $name = htmlspecialchars($_POST['name']);
    
    
    if ($quantity >= 1 && $quantity <= 10) {
        $_SESSION['type'] = $type;
        $_SESSION['quantity'] = $quantity;
        
        
        header("Location: sucess.php");
        exit(); 
    } 
    
} 