<?php
function generatePassword($length) {
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_-+=<>?';
    $characters = $letters . $numbers . $symbols;

    // Mescola i caratteri per maggiore casualità
    $characters = str_shuffle($characters);

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, strlen($characters) - 1)];
    }

    return $password;
}

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