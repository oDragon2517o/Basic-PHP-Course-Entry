<?php


$photo = $_GET["photo"];

// echo $photo;

include "config.php";
$sql = "SELECT * FROM foto WHERE Id='$photo'";

if ($result = mysqli_query($connect, $sql)) {

    // $rowsCount = mysqli_num_rows($result); // количество полученных строк

    foreach ($result as $row) {

        echo "<img src={$row['AddressServerBig']} />";
    }
    mysqli_free_result($result);
} else {
    echo "Ошибка: " . mysqli_error($conn);
}
