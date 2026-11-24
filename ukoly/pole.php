<?php

$pole;
$movies = ["avengers"," iron man","Fury","Der Tiger","Squid Game","Top gun"];
$movies = "avengers";
$movies = "iron man";
$movies = "Fury";
$movies = "Der Tiger";
$movies = "Squid Game";

echo $movies[0]. "<br>";

echo $movies[3]. "<br>";
$movies[] = "Hajný je lesa pán";
$movies[] = "Normandy";
echo count($movies). "<br>";
echo "<ul>";
foreach ($movies as $movie) {
echo "<li>$movie</li>";

}echo "</ul>";

