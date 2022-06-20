<?php
session_start();
// $salt = "sldfjsklfdj23lfd0,.sd";

$connect = mysqli_connect("localhost", "root", "my123", "5dz");
$login = $_POST['login'] ? strip_tags($_POST['login']) : "";
$pass = $_POST['pass'] ? strip_tags($_POST['pass']) : "";
// $pass = $salt.md5($pass).$salt;

$sql = "select id from users where login='$login' and pass='$pass'";

$res = mysqli_query($connect, $sql) or die("Error: " . mysqli_error($connect));

if (mysqli_num_rows($res)) {
    $_SESSION['login'] = $login;
    $_SESSION['pass'] = $_POST['pass'];
    header("Location: User.php?success=true");
} else {
    header("Location: User.php?success=false");
}
