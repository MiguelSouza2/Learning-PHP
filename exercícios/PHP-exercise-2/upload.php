<?php

$directory = "received/";
$archive = isset($_FILES['archive']) ? $_FILES['archive'] : false;

if ($archive) {

    for ($k = 0; $k < count($archive['name']); $k++) {
        $original_name = $archive['name'][$k];
        $hashArchive = isset($_FILES['archive']) ? md5($original_name) : false;
        $destiny = $directory . "/" . $hashArchive['name'][$k];

        if (move_uploaded_file($hashArchive['tmp_name'][$k], $destiny)) {
            echo "File " . $archive['name'][$k] . " uploaded successfully<br>";
            header("Location: index.php");
        } else {
            echo "Error on upload archive...";
        }
    }
} else {
    echo "No files uploaded.";
}
