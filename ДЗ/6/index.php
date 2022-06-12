<form action="index.php" method="POST">
    <input type="text" name="a" required placeholder="a" size="5px">
    <select name="cal1">
        <option value="1">Плюс</option>
        <option value="2">Минус</option>
        <option value="3">Умножение</option>
        <option value="4">Деление</option>
    </select>
    <input type="text" name="b" required placeholder="b" size="5px">
    <button type="submit" formmethod="post" formation="indedx.php">Отправить</button>
    </br>

    <?php

    if (isset($_POST["cal1"]) && is_numeric($_POST["a"]) && is_numeric($_POST["b"])) {

        $a = (int)$_POST["a"];
        $b = (int)$_POST["b"];
        $cal1 = $_POST["cal1"];
        include "mathOperation.php";
        $otvet =  mathOperation($a, $b, $cal1);
    } else $otvet = "";


    echo "<p>Результат = $otvet</p>";
    ?>

</form>
<!-- 
<script>
    alert()
</script> -->
<br>

<form action="#" method="POST">
    <input type="text" name="x" required placeholder="x" size="5px">
    <input type="text" name="y" required placeholder="y" size="5px">
    <br>
    <input type="submit" name="cal2" value="+">
    <input type="submit" name="cal2" value="-">
    <input type="submit" name="cal2" value="*">
    <input type="submit" name="cal2" value="/">

</form>

</br>

<?php

if (isset($_POST["cal2"]) && is_numeric($_POST["x"]) && is_numeric($_POST["y"])) {

    $x = (int)$_POST["x"];
    $y = (int)$_POST["y"];
    $cal2 = $_POST["cal2"];
    switch ($cal2) {
        case '+';
            $cal2 = 1;
            break;
        case '-';
            $cal2 = 2;
            break;
        case '*';
            $cal2 = 3;
            break;
        case '/';
            $cal2 = 4;
            break;
    }
    include "mathOperation.php";
    $otvet =  mathOperation($x, $y, $cal2);
} else $otvet = "";


echo "<p>Результат = $otvet</p>";
?>