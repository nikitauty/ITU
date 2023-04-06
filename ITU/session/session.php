<?php
session_start();
error_reporting(0);

$err = '';
$login = $_POST['email'];
$pass = $_POST['pass'];
if ($login == "lol" AND $pass == "1234"){
    $_SESSION['login'] = $login;
    header('Location: profile.php');
} else {
    $err = "введите корректные данные";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<form action="session.php" method="post">
    <p>Email: <input type="text" name="email" /></p>
    <p>Password: <input type="text" name="pass" /></p>
    <p><input type="submit" /></p>
</form>

<?=$err?>

</body>
</html>
