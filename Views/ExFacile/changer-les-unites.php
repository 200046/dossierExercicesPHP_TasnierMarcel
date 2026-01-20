<h1>Transformation d'unités</h1>
<p>Ce programme permet de passer d'une unité à une autre.</p>

<form action="" method="post">
    <div>
        <label for="nombre">Encode le nombre</label>
        <input type="number" id="nombre" placeholder="Km" min="1" max="10" name="nombre" value="<?= isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '10' ?>">
    </div>

    <div>
        <label for="uniteBase">Choisis l'unité de base</label>
        <select name="uniteBase" id="uniteBase">
            <option value="1000" <?= (isset($_POST['uniteBase']) && $_POST['uniteBase'] == 1000) ? 'selected' : '' ?>>m</option>
            <option value="100" <?= (isset($_POST['uniteBase']) && $_POST['uniteBase'] == 100) ? 'selected' : 'selected' ?>>dm</option>
            <option value="10" <?= (isset($_POST['uniteBase']) && $_POST['uniteBase'] == 10) ? 'selected' : '' ?>>cm</option>
            <option value="1" <?= (isset($_POST['uniteBase']) && $_POST['uniteBase'] == 1) ? 'selected' : '' ?>>mm</option>
        </select>
    </div>

    <div>
        <label for="uniteFinale">Choisis l'unité finale</label>
        <select name="uniteFinale" id="uniteFinale">
            <option value="1000" <?= (isset($_POST['uniteFinale']) && $_POST['uniteFinale'] == 1000) ? 'selected' : '' ?>>m</option>
            <option value="100" <?= (isset($_POST['uniteFinale']) && $_POST['uniteFinale'] == 100) ? 'selected' : 'selected' ?>>dm</option>
            <option value="10" <?= (isset($_POST['uniteFinale']) && $_POST['uniteFinale'] == 10) ? 'selected' : '' ?>>cm</option>
            <option value="1" <?= (isset($_POST['uniteFinale']) && $_POST['uniteFinale'] == 1) ? 'selected' : '' ?>>mm</option>
        </select>
    </div>

    <div>
        <button type="submit" name="envoyer">Envoyer</button>
    </div>
</form>

<?php if ($resultat !== ""): ?>
    <p>Résultat : <strong><?= htmlspecialchars($resultat) ?></strong></p>
<?php endif; ?>