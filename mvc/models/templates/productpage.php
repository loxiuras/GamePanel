<?php
$data = !empty($partialData) ? $partialData : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GamePanel | <?php echo $data['productName']; ?></title>
    <meta charset="UTF-8">
    <meta name="author" content="Loxiuras">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/development/fonts/montserrat.scss">
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/minified/style.css">
    <script defer src="https://pro.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-RLPiEwcAdrH2NjFcwJipJtlFoIN1xvqPYeeDX5yYtSNu+HTIkQCDvPQ9thsUnPUS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body id="body">

<div id="site">

    <?php
        $partialData = [];
        $partialData['disableSlider'] = true;
        require 'mvc/models/partials/header.php';


        $partialData = [];
        $partialData['product'] = $data['productName'];
        require 'mvc/models/partials/product-detail.php';
    ?>

</div>

</body>
</html>