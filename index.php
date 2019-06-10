<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="author" content="Loxiuras">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/development/fonts/montserrat.scss">
    <link rel="stylesheet" type="text/css" href="./assets/stylesheets/minified/style.css">
    <script defer src="https://pro.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-RLPiEwcAdrH2NjFcwJipJtlFoIN1xvqPYeeDX5yYtSNu+HTIkQCDvPQ9thsUnPUS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body id="body">

    <div id="site">
        <?php require_once 'mvc/models/partials/header.php'; ?>

        <?php require_once 'mvc/models/partials/highlighted-products.php'; ?>

        <?php require_once 'mvc/models/partials/footer.php'; ?>
    </div>

</body>
</html>