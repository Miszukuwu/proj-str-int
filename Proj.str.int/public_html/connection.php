<?php

function connectBase(){
    $login = "aowsinski";
    $pass = "Olek123A";
    $address = "localhost";
    $base = "aowsinski";
    return mysqli_connect($address, $login, $pass, $base);
}

function disconnect($connection)
{
    $connection -> close();
}