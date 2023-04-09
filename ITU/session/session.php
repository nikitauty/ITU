<?php
session_start();
error_reporting(0);
function isAuth() { //Проверка на авторизованного пользователя
    return $_SESSION["is_auth"] ?? false;
}

function auth($login, $pass) : bool { //Проверка пароля
    if ($login === "lol" AND $pass === "1234"){

        $_SESSION["is_auth"] = true;
        $_SESSION["login"] = $login;

        return true;
    } else {
        $_SESSION["is_auth"] = false;
        return false;
    }
    header("Location: session.php");
}

$login = $_POST['name'];
$pass = $_POST['pass'];

$err = "Введите корректные данные";

$form = '<form action="session.php" method="post" name="In">
    <p>Email: <input type="text" name="name" /></p>
    <p>Password: <input type="password" name="pass" /></p>
    <p><input type="submit" value="Войти"/></p>
</form>';  //Шаблон формы

if ($_POST['delete']){ //Удаление сессии
    $_SESSION = [];
    session_destroy();
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php if (isset($_POST['name']) AND isset($_POST['pass']) AND !auth($login, $pass)):?>
    <?=$err?>
<?php endif; ?>
<?php if(isAuth()): ?>
    <h1>Авторизация прошла успешно</h1>
    Username: <?=$_SESSION['login']?> <br/>
    <form method="post">
        <p><input type="submit" name="delete" value="Выйти"/></p>
    </form>
<?php else: ?>
    <?=$form?>
<?php endif; ?>
</body>
</html>
