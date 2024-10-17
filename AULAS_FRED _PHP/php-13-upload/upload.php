<?php

$directory = "received/";
$archive = isset($_FILES['archive']) ? $_FILES['archive'] : false;

if ($archive) {
    
    for($k = 0; $k < count($archive['name']); $k++) {
        $destiny = $directory . "/" . $archive['name'][$k];
        
        if (move_uploaded_file($archive['tmp_name'][$k], $destiny)) {
            echo "File ". $archive['name'][$k]. " uploaded successfully<br>";
        } else {
            echo "Error on upload archive...";
        }
    }
} else {
    echo "No files uploaded.";
}
