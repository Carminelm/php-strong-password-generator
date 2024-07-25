<?php
include_once './generate_password.php';

if (isset($_GET['length']) && is_numeric($_GET['length']) && $_GET['length'] > 5) {
    $length = intval($_GET['length']);
    $password = generatePassword($length);

    echo "<h1>Password Generata</h1>";
    echo "<p>La tua password casuale di lunghezza $length è:</p>";
    echo "<p><strong>$password</strong></p>";
} else {
    echo "Lunghezza non valida. Per favore inserisci un numero maggiore di 5.";
}
?>