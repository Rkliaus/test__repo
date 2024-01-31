<?php
// phpinfo();

function Square_Calc ($sLenght, $sWidth){
    $Square = $sLenght *  $sWidth;
    return "При длине $sLenght  и ширине $sWidth значение площади прямоугольника будет $Square";
}
echo Square_Calc(17, 54) . "<br><hr>";
// 
echo date('t', mktime(0, 0, 0, 10)) . " days<br><hr>";
// 
$NewYear = date_diff(date_create('now'), date_create('01-01-2025'))->days;
 echo $NewYear . " days till NY <br><hr>";
// 
 var_dump(date_diff(date_create('01-01-2024'), date_create('25-01-2024'))->days);
echo "<br><hr>";
// 





// // 1. 
// $x = 5;
// $x = 5+3;
// echo $x;
// echo "<br><hr>";
// // 2. 
// $a = 10;
// $b = 7;
// $a= $a / $b;
// echo $a;
// echo "<br><hr>";
// // 3. 
// $name = "Алиса";
// $age = 25;
// echo "Меня зовут $name и мне $age лет";
// echo "<br><hr>";
// // 4.
// $y =12;
// $y = $y* 2;
// echo $y;
// echo "<br><hr>";
// // 5.
// $x=6;
// $y=4;
// $x=$x*$y;
// echo $x;
// echo "<br><hr>";
// // 6.
// $var1 = 7;
// $var2 = 3;
// $var3 = $var1 + $var2;
// echo $var3;
// echo "<br><hr>";
// // 7.
// $stringName = "меня зовут пластилин,";
// $stringName = $stringName."мне нравится Виктор Цой";
// echo $stringName;
// echo "<br><hr>";
// // 8.
// $z=5;
// ++$z;
// echo $z;
// echo "<br><hr>";
// // 9.
// $stringName = "меня зовут Виктор Цой,";
// $stringIlike = "мне нравится пластилин";
// $stringSummary = $stringName.$stringIlike;
// echo $stringSummary;
// echo "<br><hr>";
// // 10.
// $digit = "5";
// $number = 13;
// echo $digit+$number;