<!-- Titre principal -->
<h1>Transformation d'unités</h1>

<!-- Description du programme -->
<p>Ce programme permet de passer d'une unité à une autre.</p>

<!-- Formulaire envoyé en POST -->
<form action="" method="post">
    
    <!-- Zone pour entrer le nombre -->
    <div>
        <label for="nombre">Encode le nombre</label>
        
        <!-- Champ numérique avec valeur conservée après envoi -->
        <input type="number"  id="nombre"  placeholder="Km"  min="1"  max="10000"  name="nombre"  value="<?= isset($_POST['nombre']) ? ($_POST['nombre']) : '10' ?>"
        >
    </div>

    <!-- Choix de l'unité de base -->
    <div>
        <label for="uniteBase">Choisis l'unité de base</label>
        
        <!-- Liste déroulante pour l'unité de départ -->
        <select name="uniteBase" id="uniteBase">
            
            <!-- Chaque option garde la sélection après l'envoi -->
            <option value="1000" <?= (isset($_POST['uniteBase']) && $_POST['uniteBase'] == 1000) ? 'selected' : '' ?>>m</option>
            <option value="100"  <?= (isset($_POST['uniteBase']) && $_POST['uniteBase'] == 100)  ? 'selected' : 'selected' ?>>dm</option>
            <option value="10"   <?= (isset($_POST['uniteBase']) && $_POST['uniteBase'] == 10)   ? 'selected' : '' ?>>cm</option>
            <option value="1"    <?= (isset($_POST['uniteBase']) && $_POST['uniteBase'] == 1)    ? 'selected' : '' ?>>mm</option>
        </select>
    </div>

    <!-- Choix de l'unité finale -->
    <div>
        <label for="uniteFinale">Choisis l'unité finale</label>
        
        <!-- Liste déroulante pour l'unité d'arrivée -->
        <select name="uniteFinale" id="uniteFinale">
            
            <!-- On conserve aussi la sélection -->
            <option value="1000" <?= (isset($_POST['uniteFinale']) && $_POST['uniteFinale'] == 1000) ? 'selected' : '' ?>>m</option>
            <option value="100"  <?= (isset($_POST['uniteFinale']) && $_POST['uniteFinale'] == 100)  ? 'selected' : 'selected' ?>>dm</option>
            <option value="10"   <?= (isset($_POST['uniteFinale']) && $_POST['uniteFinale'] == 10)   ? 'selected' : '' ?>>cm</option>
            <option value="1"    <?= (isset($_POST['uniteFinale']) && $_POST['uniteFinale'] == 1)    ? 'selected' : '' ?>>mm</option>
        </select>
    </div>

    <!-- Bouton d'envoi -->
    <div>
        <button type="submit" name="envoyer">Envoyer</button>
    </div>
</form>

<?php 
// On affiche le résultat seulement s'il existe
if ($resultat !== ""): 
?>

    <!-- Affichage sécurisé du résultat -->
    <p>Résultat : <strong><?= htmlspecialchars($resultat) ?></strong></p>

<?php endif; ?>
