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