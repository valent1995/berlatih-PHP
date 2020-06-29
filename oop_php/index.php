<?php
require_once 'animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

echo "<h2>Release 0</h2>";

$sheep = new Animal("shaun");

echo $sheep->name."<br>"; // "shaun"
echo $sheep->legs."<br>"; // 2
echo $sheep->cold_blooded; // false

echo "<h2>Release 1</h2>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

?>