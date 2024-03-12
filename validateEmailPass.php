<?php

function validateEmail($email) {
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    return preg_match($pattern, $email) !== 0;
}

function validatePassword($password) {
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/';
    return preg_match($pattern, $password);
}

$email = "Mhmd@gmail.com";
$password = "VeryGoodPassword47";
if (validateEmail($email)) {
    echo "Email is valid.\n";
} else {
    echo "Email is not valid.\n";
}

if (validatePassword($password)) {
    echo "Password is valid.\n";
} else {
    echo "Password is not valid.\n";
}
