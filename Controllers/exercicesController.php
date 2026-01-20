<?php
// Récupère l'URI demandée
$uri = $_SERVER["REQUEST_URI"];
// Extrait uniquement le chemin (sans paramètres)
$path = parse_url($uri, PHP_URL_PATH);
// Inclut les fonctions du modèle
require 'Models/exercices.php';

// Variable qui contiendra le résultat à afficher
$resultat = "";

// ------------------ Conversion décimal → binaire ------------------
if ($path === "/conversion1") {

    // Vérifie si le formulaire a été envoyé
    if (isset($_POST['envoyer'])) {

        // Récupère le nombre saisi
        $nombre = $_POST['nombre'];

        // Vérifie qu'il n'est pas vide
        if ($nombre !== "") {

            // Convertit le nombre en binaire
            $resultat = decimalToBinary($nombre);
        }
    }

    // Titre de la page
    $title = "Exercice Facile - Conversion 1";

    // Vue à afficher
    $template = "Views/ExFacile/conversion1.php";

    // Charge la base du site
    require 'Views/base.php';
}

// ------------------ Changer les unités ------------------
elseif ($path === "/changer-les-unites") {

    // Vérifie si le formulaire a été envoyé
    if (isset($_POST['envoyer'])) {

        // Récupère et transforme les valeurs en nombre
        $nombre = floatval($_POST['nombre']);
        $uniteBase = floatval($_POST['uniteBase']);
        $uniteFinale = floatval($_POST['uniteFinale']);

        // Vérifie que le nombre est valide
        if ($nombre >= 0) {

            // Effectue la conversion d'unités
            $resultat = convertirUnite($nombre, $uniteBase, $uniteFinale);
        }
    }

    // Titre de la page
    $title = "Changer les unités";

    // Vue à afficher
    $template = 'Views/ExFacile/changer-les-unites.php';

    // Charge la base du site
    require 'Views/base.php';
}
