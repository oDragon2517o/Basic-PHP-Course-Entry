<?php
session_start();
if (isset($_GET['success']) && $_GET['success'] && $_SESSION['login']) : ?>
    <h1>Добро пожаловать <?= $_SESSION['login'] ?></h1>
<?php
endif;
?>


<form action="images/images.php?success=true" method="post">
    <input type="submit" value="Картинки">
    <?php
    // $_GET['success'];
    // $_SESSION['login'];

    ?>

</form>

<form action="images/script/UserImages.php" method="post">
    <input type="submit" value="Отмеченные">
    <?php

    ?>
</form>

<?php
if (isset($_GET['success']) && $_GET['success'] && $_SESSION['login'] == '123') : ?>
    <br>

    <form action="images/script/script.php" method="POST" enctype="multipart/form-data">

        <input type="file" name="images">
        <input type="submit" value="Загрузить">
    </form>
<?php
endif;
?>