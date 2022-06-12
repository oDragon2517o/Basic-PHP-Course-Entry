<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    </style>
</head>

<body>

    <?php
    include "config.php";
    $sql = "SELECT * FROM foto";
    $res = mysqli_query($connect, $sql);

    ?>
    <table style="text-align:center; margin: 0 auto;" align="center" border="1" width="800">
        <tr>
            <td>Фото</td>
            <td>Фулл фото</td>
        </tr>
        <tr>
            <!-- <td>123</td>
            <td>123</td> -->

            <?php

            while ($data = mysqli_fetch_assoc($res)) {


                echo "<tr><td> <img src={$data['AddressServerSmall']} /> </td>  <td><a href='FotoFull.php?photo={$data['Id']}'> Фулл Фото </a></td>";

                // <td>{$data['AddressServerBig']}</td>

            } ?>

        </tr>

    </table>



</body>

</html>