<?php
echo "1 задание" . "<br>";
$a = 0;


while ($a <= 100) {
    if ($a % 3 == 0) {
        echo $a / 3 . ",";
    }
    $a++;
}
echo "<br>";
echo "<br>";

echo "2 задание" . "<br>";
$a = 0;
do {
    if ($a == 0) {
        echo $a . " – ноль.";
    } elseif ($a % 2 == 0) {
        echo $a . " – четное число.";
    } else {

        echo $a . " – нечетное число.";
    }
    $a++;
    echo "<br>";
} while ($a <= 10);
echo "<br>";
echo "<br>";

echo "3 задание" . "<br>";

$mas = ["Архангельская область" => ['Архангельск', 'Северодвинск'], "Вологодская область" => ["Вологда", "Череповец", "Тотьма"], "Кировская область" => ["Совецк", "Котельнич", "Уржум"]];
// print_r($mas);
foreach ($mas as $value => $cei) {

    echo "<br>" . $value . ":<br>";
    foreach ($cei as $cei2) {
        echo $cei2 . ", ";
    }
}
echo "<br>";
echo "<br>";

echo "4 задание" . "<br>";


$ru = array(
    "а" => "a",
    "б" => "b",
    "в" => "v",
    "г" => "g",
    "д" => "d",
    "е" => "e",
    "ё" => "yo",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "й" => "y",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "х" => "h",
    "ц" => "ts",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "s'h",
    "ъ" => "",
    "ы" => "i",
    "ь" => "'",
    "э" => "e",
    "ю" => "yu",
    "я" => "ya",
    " " => " "
);

function ransliterations($text, $language)
{
    echo strtr($text, $language);
}
$txt = "Тут типо текс для транслитерации";
ransliterations($txt, $ru);
echo "<br>";
echo "<br>";

echo "5 задание" . "<br>";
function transform($text)
{
    return str_replace(" ", "_", $text);
}
$text = "Тут текст с пробелами";

echo transform($text);
