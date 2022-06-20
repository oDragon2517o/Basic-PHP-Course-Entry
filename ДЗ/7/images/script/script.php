<?php
$name = "images/images" . $_FILES['images']['name'];
$path = "../images/" . $_FILES['images']['name'];
include "../../config.php";
if (move_uploaded_file($_FILES['images']['tmp_name'], $path)) {
    echo $_FILES['images']['name'] . " успешно загружен!";
}

if ($result = mysqli_query($connect, "INSERT images (AddressImages) VALUES ('$name')")) {
    echo "Данные успешно добавлены";
} else {
    $result->error;
}

mysqli_close($connect);
