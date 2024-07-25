<?php


include ("config/config.php");

if (isset($_POST['username']) && ($_POST['password'])) {
    function validation($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
    $username = validation($_POST['username']);
    $password = validation($_POST['password']);

}

if (empty(trim($username)) || empty(trim($password)) || empty(trim($email))) {
    header('Location: +=?error=there is an empty input');
} else {
    header("Location: main_page.php");
}
