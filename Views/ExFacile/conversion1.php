<h1>Transforme un nombre de décimal vers binaire</h1>

<form method="post">
    <label>Nombre décimal</label><br>
    <input type="number" name="nombre">
    <br><br>
    <button type="submit" name="envoyer">Envoyer</button>
</form>

<?php if ($resultat != ""): ?>
    <p>Résultat en binaire : <strong><?= $resultat ?></strong></p>
<?php endif; ?>