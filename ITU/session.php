<?php
session_start();
error_reporting(0);

$login = $_GET['login'];
$pass = $_GET['pass'];
if ($login == "lol" AND $pass == "1234"){
    $_SESSION['login'] = $login;
    header('Location: profile.php');
} else {
    echo "<h1>Введите корректные данные</h1>";
}

