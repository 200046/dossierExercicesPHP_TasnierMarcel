<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$uri = $_SERVER["REQUEST_URI"];
$path = parse_url($uri, PHP_URL_PATH);

require 'Models/exercices.php';

$resultat = "";

// --- Conversion décimal → binaire ---
if ($path === "/conversion1") {
    if (isset($_POST['envoyer'])) {
        $nombre = $_POST['nombre'];
        if ($nombre !== "") {
            $resultat = decimalToBinary($nombre);
        }
    }
    $title = "Exercice Facile - Conversion 1";
    $template = "Views/ExFacile/conversion1.php";
    require 'Views/base.php';
}

// --- Changer les unités ---
elseif ($path === "/changer-les-unites") {
    if (isset($_POST['envoyer'])) {
        $nombre = floatval($_POST['nombre']);
        $uniteBase = floatval($_POST['uniteBase']);
        $uniteFinale = floatval($_POST['uniteFinale']);
        if ($nombre >= 0) {
            $resultat = convertirUnite($nombre, $uniteBase, $uniteFinale);
        }
    }
    $title = "Changer les unités";
    $template = 'Views/ExFacile/changer-les-unites.php';
    require 'Views/base.php';
}