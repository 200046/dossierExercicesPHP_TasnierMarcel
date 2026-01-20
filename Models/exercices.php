<?php

function decimalToBinary($nombre)
{
    return decbin($nombre);
}

function convertirUnite($nombre, $uniteBase, $uniteFinale) {
    // Conversion simple : on ramène tout à la plus petite unité
    $resultat = $nombre * $uniteBase / $uniteFinale;
    return $resultat;
}