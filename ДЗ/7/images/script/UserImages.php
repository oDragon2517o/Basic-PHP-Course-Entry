<?php
session_start();

include "../../config.php";

$login = $_SESSION['login'];

if ($result = mysqli_query($connect, "SELECT*FROM added LEFT JOIN users ON added.id_users=users.id LEFT JOIN images ON added.id_images=images.id WHERE login='$login';")) {

    while ($data = mysqli_fetch_assoc($result)) {

        // print_r($data);
        $data['AddressImages'] = "../../" . $data['AddressImages'];
        echo  "<img src={$data['AddressImages']} width='400'><br>";
    }
} else {
    $result->error;
};
