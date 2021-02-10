<?php

// Connexion et sélection de la base
$mysqli = new mysqli('db', 'user', 'test', "Database");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$username = $_POST['username'];
$result = $mysqli->query($query = "SELECT * FROM User WHERE name='$username'");

if ($result !== false && $result->num_rows > 0) {
    echo '<center><h1>Connected</h1></center>';
    echo '';
    var_dump($result);
} else {
    header("Location: http://0.0.0.0:8001/index.html");
}

/* Libération du jeu de résultats */

$mysqli->close();

?>
