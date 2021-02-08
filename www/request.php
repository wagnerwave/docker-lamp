<?php

// Connexion et sélection de la base
$mysqli = new mysqli('db', 'user', 'test', "Database");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$username = $_POST['username'];

$result = $mysqli->query($query = "SELECT * FROM User WHERE name='$username'");

$row_cnt = $result->num_rows;

if ($row_cnt == 0) {
    header("Location: http://0.0.0.0:8001/index.html");
} else {
    echo '<center><h1>Connected</h1></center>';
    echo '';
    var_dump($result);
}

/* Libération du jeu de résultats */

$mysqli->close();

?>