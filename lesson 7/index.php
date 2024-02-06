<?php
$input_string = "Я люблю PHP";
$replacement_string = "dengi";
$pattern = "/PHP/";
echo preg_replace($pattern, $replacement_string, $input_string) . "<hr>";

$nogap_string = preg_replace('/\s+/', '', $input_string) ;
echo $nogap_string  . "<hr>";

$find_string = "php";
echo mb_stripos($input_string, $find_string) . "<hr>";

$partsofinput_string = explode(" ", $input_string);
unset($partsofinput_string[1]);
print_r($partsofinput_string);
 
$phone_number = "+375447171117";
var_dump(preg_match("/^\\+375([0-9]{9})$/", $phone_number));

$url = "/catalog/125/item-12/tovar-name";
var_dump(preg_match("/^\\/catalog\\/\\d+\\/item\\-\\d+\\/\\w/", $url));
