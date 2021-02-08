<?php

// Connexion et sélection de la base
$conn = mysqli_connect('db', 'user', 'test', "myDb");

$username = $_POST['username'];
$query = "SELECT * FROM User WHERE name='$username'";

$result = mysqli_query($conn, $query);

if ($result) {
    echo 'password = EPITECH_RENNES{GG_YOU_WIN_THIS_CHALL_TO_EZ_FOR_U}';
} else {
    header("Location: http://0.0.0.0:8001/index.html");
}

/* Libération du jeu de résultats */

mysqli_close($conn);

?>