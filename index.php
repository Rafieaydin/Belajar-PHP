<?php 
require 'frog.php';
require 'Ape.php';
require 'Animal.php';

// Relase 0
$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->legs; // 2
echo $sheep->cold_blooded; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// index.php
$sungokong = new Ape("kera sakti");
$sungokong->yell();   // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
?>