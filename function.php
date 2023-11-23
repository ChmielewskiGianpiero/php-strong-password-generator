<?php

$password = $_GET['passwordLen'];

function getRandomPassword($password) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomPassword = '';
 
    for ($i = 0; $i < $password; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomPassword .= $characters[$index];
    }
 
    return $randomPassword;
 }

?>