<h1>Décomposition en facteurs premiers</h1>
<p>Je vais récupérer un nombre et je vais donner sa décomposition en facteurs premiers</p>

<form action="" method="post">
    <div>
        <label for="nombre">Donne moi un nombre</label>
        <input type="number" placeholder="Ton nombre" name="nombre" id="nombre">
    </div>

    <div>
        <button type="submit" name="envoyer">Envoyer</button>
    </div>
</form>

<?php if (isset($_POST['envoyer']) && $resultat != ""): ?>
    <p>Résultat : <strong><?php echo $resultat; ?></strong></p>
<?php endif; ?>