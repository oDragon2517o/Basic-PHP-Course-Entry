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
echo "<br>";
echo "<br>";
echo "6 задание" . "<br>";

//echo "<hr/>";
	$menu = ['Курсы' => ['Программирование' => 'java, 123', 'Web-дизайн' => 'Pain'],
		'Вебинары' => ['Создание сайта за час' => 'HTML База', 'Создание игры на Android' => 'Hame Android pro+'],
		'Форум' => 'Задай вопрос и не дождись ответа'];
	$str = "<ul>";

	foreach($menu as $item => $menuM1) {
		if(is_array($menuM1)) {
			$str .= "<li>$item</li><ul>";
			foreach($menuM1 as $item2 => $menuM2) {
				$str .= "<li>$item2</li>"."<ul>$menuM2</ul>";
			}
			$str .= "</ul>";
		} else {
			$str .= "<li>$item</li><ul>$menuM1</ul>";
		}
	}

	$str .= "</ul>";
	echo $str;
	echo "<br>";
echo "<br>";



    // echo "<hr/>";
	// $menu = ['Курсы' => ['Программирование' => 'https://geekbrains.ru/courses/14', 'Web-дизайн' => 'https://geekbrains.ru/courses/484'],
	// 	'Вебинары' => ['Создание сайта за час' => 'https://geekbrains.ru/events/741', 'Создание игры на Android' => 'https://geekbrains.ru/events/682'],
	// 	'Форум' => 'https://geekbrains.ru/topics'];
	// $str = "<ul>";
	// foreach($menu as $item => $subitem) {
	// 	if(is_array($subitem)) {
	// 		$str .= "<li>$item</li><ul>";
	// 		foreach($subitem as $iitem => $ssubitem) {
	// 			$str .= "<a href=$ssubitem><li>$iitem</li></a>";
	// 		}
	// 		$str .= "</ul>";
	// 	} else {
	// 		$str .= "<a href=$subitem><li>$item</li></a>";
	// 	}
	// }
	// $str .= "</ul>";
	// echo $str;
	
