<?php

function imprimeVetor($vet) {
    foreach($vet as $v) {
        echo $v . "|";
    }
echo "\n";
}

$jjk = array("Nanami", "Yuta", "Inumaki", "Maki", "Shoko");
$smg = array("Winter", "Tiffany", "Giselle", "Joy", "Karina");
$ghouls = array("Rain", "Sodo", "Swiss", "Sunshine", "Aurora");
$songs = array("Jesus He Knows Me", "Stamp on it", "Griftwood", "Highway to Heaven", "Kazino");
$cats = array("American Shorthair", "British Shorthair", "Russian Blue", "Persian", "Sphynx");

imprimeVetor($jjk);
imprimeVetor($smg);
imprimeVetor($ghouls);
imprimeVetor($songs);
imprimeVetor($cats);
