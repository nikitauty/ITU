<?php
function my_autoloader($class) {
    include $class . ".php";
}

spl_autoload_register("my_autoloader");

session_start();

$del = null;
$user = new Users();

function isAuth() { //Проверка на авторизованного пользователя
    return $_SESSION["is_auth"] ?? false;
}

function auth($user) : bool { //Проверка пароля
    if ($user->getLogin() === "lol" AND $user->getPassword() === "1234"){
        $_SESSION["is_auth"] = true;
        $_SESSION["login"] = $user->getLogin();
        header("Location: session.php");
        return true;
    } else {
        $_SESSION["is_auth"] = false;
        header("Location: session.php");
        return false;
    }
}

if (isset($_POST['name'])){
    $user->setLogin($_POST['name']);
}
if (isset($_POST['pass'])){
    $user->setPassword($_POST['pass']);
}
if (isset($_POST['delete'])){
    $del = $_POST['delete'];
}

$err = "Введите корректные данные";

if ($del){ //Удаление сессии
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
<?php if (isset($_POST['name']) AND isset($_POST['pass']) AND !auth($user)):?>
    <?=$err?>
<?php endif; ?>
<?php if(isAuth()): ?>
    <h1>Авторизация прошла успешно</h1>
    Username: <?=$_SESSION['login']?> <br/>
    <form method="post">
        <p><input type="submit" name="delete" value="Выйти"/></p>
    </form>
<?php else: ?>
    <form action="session.php" method="post" name="In">
        <p>Email: <input type="text" name="name" /></p>
        <p>Password: <input type="password" name="pass" /></p>
        <p><input type="submit" value="Войти"/></p>
    </form>
<?php endif; ?>
</body>
</html>
