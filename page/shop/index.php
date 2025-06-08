<?php
require BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/handlers/plants.handlers.php';
require_once BASE_PATH . '/utils/display.plants.utils.php';
require_once BASE_PATH . '/components/templates/header.component.php';
?>

<head>
    <link rel="stylesheet" href="/page/shop/assets/css/style.css">
</head>

<section class="featured-plants container" aria-label="Featured Plants" id="products" tabindex="-1">
    <h2 class="section-title">Featured Plants</h2>
    <div class="plant-grid">
        <?php displayPlants($featuredPlants); ?>
    </div>
</section>


<?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>