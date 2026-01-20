<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS et favicon avec chemin absolu depuis la racine -->
    <link rel="stylesheet" href="/Assets/Css/base.css">
    <link rel="shortcut icon" href="/Assets/Images/logo.png" type="image/x-icon">

    <title><?= $title ?></title>
</head>

<body>
    <header>
        <?php 
        // Navbar
        require_once 'Views/Components/navBar.php'; 
        ?>
    </header>

    <main>
        <div class="page">
            <div class="main-content">
                <div class="container">
                    <?php 
                    require_once $template;
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
