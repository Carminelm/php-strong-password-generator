<?php
include_once './function.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generetor</title>
</head>
<body>
<h1>Genera una password casuale</h1>
    <form action="generate_password.php" method="get">
        <label for="length">Lunghezza della password:</label>
        <input type="number" id="length" name="length" min="1" required>
        <button type="submit">Genera</button>
    </form>
    
</body>
</html>

