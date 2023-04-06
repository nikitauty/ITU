<?php
session_start();
echo "<h1>Авторизация прошла успешно</h1>";
echo "Username: {$_SESSION['login']} <br/>";
echo "<a href='session.php'>Выйти</a>";