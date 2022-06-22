<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_GET['success']) && $_GET['success'] && $_SESSION['login']) : ?>
        <h1>Добро пожаловать <?= $_SESSION['login'] ?></h1>
    <?php
    endif;
    ?>

    <?php
    include "../config.php";
    $sql = "SELECT * FROM images";
    $res = mysqli_query($connect, $sql);

    ?>
    <table style="text-align:center; margin: 0 auto;" align="left" border="1" width="300">
        <tr>
            <td>Фото</td>
            <td>Фулл фото</td>
        </tr>
        <tr>
            <!-- <td>123</td>
            <td>123</td> -->

            <?php

            while ($data = mysqli_fetch_assoc($res)) {

                $data['AddressImages'] = "../" . $data['AddressImages'];

                echo "<tr><td> <img src={$data['AddressImages']} width='400' > </td>" ?>

                <td>
                    <form action="script/added.php" method="post">
                        <input type="submit" value="Добавить">
                        <input type="hidden" name="id_images" value="<?php echo $data['id'] ?>">
                        <!-- <?php echo $data['id'] ?> -->
                        <!-- $data['id'] -->
                        <!-- <a href='#'> Добавить </a> -->
                    </form>
                </td>
            <?php
                // <td>{$data['AddressServerBig']}</td>

            } ?>

        </tr>

    </table>


</body>

</html>