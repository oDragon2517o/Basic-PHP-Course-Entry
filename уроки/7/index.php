<?php
session_start();
if (isset($_GET['success']) && $_GET['success'] && $_SESSION['login']) : ?>
    <h1>Ваша учетная запись подтверждена!</h1>
<?php
endif;
?>
<form action="server.php" method="post">
    <p>Ваш логин</p>
    <input type="text" name="login" value="<?= $_SESSION['login'] ?>">
    <p>Введите пароль</p>
    <input type="password" name="pass" value="<?= $_SESSION['pass'] ?>"><br><br>
    <input type="submit" value="Войти">
</form>