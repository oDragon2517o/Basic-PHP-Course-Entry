<?php
session_start();
echo $_SESSION['login'];
echo "<br>";
echo $_POST["id_images"];
include "../../config.php";
echo "<br>";
$login = $_SESSION['login'];
$idImages = $_POST['id_images'];


if ($result = mysqli_query($connect, "SELECT id FROM users WHERE login='$login'")) {
    // print_r($result);
    $data = mysqli_fetch_assoc($result);
    $idlogin = $data['id'];
    // echo $idlogin;
    // print_r($data);
} else {
    $result->error;
};


if ($result = mysqli_query($connect, "INSERT added (id_users, id_images) VALUES ('$idlogin', '$idImages')")) {
    echo "Данные успешно добавлены";
} else {
    $result->error;
    // echo "error";
}

mysqli_close($connect);
