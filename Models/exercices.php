<?php

// Fonction qui transforme un nombre décimal en binaire
function decimalToBinary($nombre)
{
    // decbin() est une fonction PHP qui convertit un nombre en binaire
    return decbin($nombre);
}

// Fonction qui convertit un nombre d'une unité vers une autre
function convertirUnite($nombre, $uniteBase, $uniteFinale)
{

    // On convertit d'abord le nombre vers une unité "commune"
    // puis on le ramène vers l'unité finale
    // Exemple : 2 m -> mm -> cm
    $resultat = $nombre * $uniteBase / $uniteFinale;

    // On retourne le résultat
    return $resultat;
}

function enEcritureScientifique($nombre)
{
    if ($nombre == 0) {
        return '0';
    }

    $exposant = floor(log10(abs($nombre)));
    $a = $nombre / pow(10, $exposant);

    // Limiter a à 7 chiffres après la virgule pour lisibilité
    $a = round($a, 7);

    return $a . ' × 10^' . $exposant;
}
