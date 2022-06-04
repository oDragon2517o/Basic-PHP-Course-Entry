<?php
echo "1 задание"."<br>";
$a=random_int(-10,+10);
$b=random_int(-10,+10);
echo "\$a=".$a."<br>";
echo '$b='.$b."<br>";

function calc ($a,$b) {
if( $a>=0 && $b>=0){
    echo $a-$b;
}elseif($a<0 && $b<0){
    echo $a*$b;
}else{
    echo $a+$b;
}
}
calc($a,$b);
echo"<br>";
echo"<br>";


echo "2 задание"."<br>";

$a=random_int(0,+10);
echo "\$a=".$a."<br>";

switch($a)
{
    case 0: 
        echo "0,";
    case 1: 
        echo "1,";
    case 2: 
        echo "2,";
    case 3: 
        echo "3,";
    case 4: 
        echo "4,";
    case 5: 
        echo "5,";
    case 6: 
        echo "6,";
    case 7: 
        echo "7,";
    case 8: 
        echo "8,";
    case 9: 
        echo "9,";
    case 10: 
        echo "10,";
    case 11: 
        echo "11,";
    case 12: 
        echo "12,";
    case 13: 
        echo "13,";
    case 14: 
        echo "14,";
    case 15: 
        echo "15";

}
echo"<br>";
echo"<br>";

echo "3 задание"."<br>";
$a=random_int(-10,+10);
$b=random_int(-10,+10);
echo "\$a=".$a."<br>";
echo '$b='.$b."<br>";

function addition  ($a,$b){
    return $a+$b;
}
function subtraction  ($a,$b){
    return $a-$b;
}
function multiplication   ($a,$b){
    return $a*$b;
}
function division   ($a,$b){
    return $a/$b;
}

echo addition($a,$b);
echo"<br>";
echo subtraction($a,$b);
echo"<br>";
echo multiplication($a,$b);
echo"<br>";
if($b !==0){
echo division($a,$b);
echo"<br>";}

echo"<br>";


echo "4 задание"."<br>";
$arg1=random_int(-10,+10);
$arg2=random_int(-10,+10);
echo "\$arg1=".$arg1."<br>";
echo '$arg2='.$arg2."<br>";
function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case 1;
        return addition ($arg1, $arg2);
        break;
        case 2;
        return subtraction ($arg1, $arg2);
        break;
        case 3;
        return multiplication ($arg1, $arg2);
        break;
        case 4;
        return division ($arg1, $arg2);
        break;
    }
}
echo mathOperation($arg1, $arg2, 1);echo"<br>";
echo mathOperation($arg1, $arg2, 2);echo"<br>";
echo mathOperation($arg1, $arg2, 3);echo"<br>";
if($arg2 !==0){
echo mathOperation($arg1, $arg2, 4);echo"<br>";
}

