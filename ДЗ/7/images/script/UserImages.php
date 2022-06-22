<?php
session_start();

include "../../config.php";

$login = $_SESSION['login'];

if ($result = mysqli_query($connect, "SELECT id FROM users WHERE login='$login'")) {
    // print_r($result);
    $data = mysqli_fetch_assoc($result);
    $idLogin = $data['id'];
    echo $idLogin;
    // print_r($data);
} else {
    $result->error;
};

if ($result = mysqli_query($connect, "SELECT id_images FROM added WHERE id_users='$idLogin'")) {
    // print_r($result);
    // $data = mysqli_fetch_assoc($result);

    // print_r($data);
} else {
    $result->error;
};

while ($data = mysqli_fetch_assoc($result)) {

    print_r($data);
    echo  "<br>";


    // <td>{$data['AddressServerBig']}</td>

}
