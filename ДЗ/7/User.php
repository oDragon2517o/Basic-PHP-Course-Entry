<?php
session_start();
if (isset($_GET['success']) && $_GET['success'] && $_SESSION['login']) : ?>
    <h1>Добро пожаловать <?= $_SESSION['login'] ?></h1>
<?php
endif;
?>

<input type="submit" value="Картинки">
<input type="submit" value="Отмеченные">

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