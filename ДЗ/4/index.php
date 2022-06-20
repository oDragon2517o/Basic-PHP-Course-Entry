<!-- <img width="200" src="pictures/5bH_-iEogvYotdyqVz1b3foj4GLfGlMF5h-Kuatlq4DVhAtDG9fXLhzC39DkJ6Sy5_DzGJrxzjx4mdnYbBFyIW9m.jpg"> -->

<style>
    * {
        margin: 0;
        /* border: 0; */
        padding: 0;
        text-decoration: none;

    }
</style>

<form action="dpictures.php" method="post" enctype="multipart/form-data">
    <p>Выберите файл</p>
    <input type="file" name="photo"><br>
    <input type="submit" value="Загрузить">
</form>


<br>


<?php


$pictures = scandir("pictures");
//print_r($pictures);
for ($i = 2; $i < count($pictures); $i++) { ?>
    <a href="pictures/<?= $pictures[$i] ?>" target="_blank">
        <img src="pictures/<?= $pictures[$i] ?>" alt="<?php echo $pictures[$i] ?>" img width="200">


    <?php
} ?>