<?php
$text = "я люблю обучаться PHP";
function transform($text, $replacement) {
$newtext = str_replace("PHP", $replacement, $text);
return $newtext;

}
$replacement = "PIVO";
echo transform($text, $replacement). "<br>" ;  
echo mb_strlen($text) . "<br>";
echo str_word_count($text, 0, "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя") . "<br>";
echo mb_strtoupper( $text ) . "<br>" ;


$array = [
    "name" => "Fred",
    "remove" => true,
    "additional_params" => [
        "is_married" => false,
        "country" => "France",
        "born" => "10.09.1982",
    ]
];
echo "<br>";
unset($array["remove"]);
print_r($array) ;
echo "<br>";

$BornAt = $array["additional_params"]["born"];
$BornAt = DateTime::createFromFormat("d.m.Y", $BornAt);
$NowIs= new DateTime();
$datediff = $BornAt->diff($NowIs);
$age = $datediff->y;
echo $age;
echo "<br>";

ksort($array);
print_r($array);
echo "<br>";
krsort($array);
print_r($array);
echo "<br>";

$country_array = [
"name" => "Contry",
"timezones" => "Time zone",
"capital" => "Capital",
    
];

$array["additional_params"]["country"] = $country_array;
print_r($array);
echo "<br>";


$array_two = [
    "child" => null
];
$array_union = array_merge($array, $array_two);
print_r($array_union);
echo "<br>";

$BornAt = $array["additional_params"]["born"];
$BornAt_array = explode(".",$BornAt);
$BornAt_keys = array("day","month","year");
$BornAt_array = array_combine($BornAt_keys, $BornAt_array);
$array["additional_params"]["born"] = $BornAt_array;
print_r($array);
echo "<br>";

$date_minmax = $array["additional_params"]["born"];
$date_minmax = date("d.m.Y", mktime(0, 0, 0, $date_minmax["month"], $date_minmax["day"], $date_minmax["year"]));
echo "Дата рождения: $date_minmax\n";
echo "Максимальное число: " . max(explode(".", $date_minmax)) . "\n";
echo "Минимальное число: " . min(explode(".", $date_minmax)) . "\n";
echo "<br>";

$datesorting = $array["additional_params"]["born"];
asort($datesorting, flags:SORT_NUMERIC);
print_r($datesorting);