<!-- Titre de la page -->
<h1>Transforme un nombre de décimal vers binaire</h1>

<!-- Formulaire qui envoie les données en POST -->
<form method="post">
    
    <!-- Label pour le champ -->
    <label>Nombre décimal</label><br>
    
    <!-- Champ pour saisir un nombre -->
    <input type="number" name="nombre">
    
    <br><br>
    
    <!-- Bouton pour envoyer le formulaire -->
    <button type="submit" name="envoyer">Envoyer</button>
</form>

<?php 
// On vérifie si la variable $resultat n'est pas vide
// Cela permet d'afficher le résultat seulement après l'envoi du formulaire
if ($resultat != ""): 
?>

    <!-- Affiche le résultat converti en binaire -->
    <p>Résultat en binaire : <strong><?= $resultat ?></strong></p>

<?php endif; ?>
