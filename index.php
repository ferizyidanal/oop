<?php
require_once "Animal.php";
require_once "frog.php";
 require_once "Ape.php";
$sheep = new Animal("shaun");
echo "name :" . $sheep->name; 
echo "<br>";
echo "legs :". $sheep->legs; 
echo "<br>";
echo "cold blooded :". $sheep->cold_blooded;
echo "<br><br>";

$sungokong = new frog("buduk");   
echo "name :" . $sungokong->name; 
echo "<br>";
echo "legs :". $sungokong->legs; 
echo "<br>";
echo "cold blooded :". $sungokong->cold_blooded;
echo "<br>";
echo "jump: ";
$sungokong-> jump();
echo "<br><br>";

$kodok = new ape("kera sakti");   
echo "name :" . $kodok->name; 
echo "<br>";
echo "legs :". $kodok->legs; 
echo "<br>";
echo "cold blooded :". $kodok->cold_blooded;
echo "<br>";
echo "jump: ";
$kodok-> ayam();
echo "<br><br>";


?>
