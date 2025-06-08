<?php
require BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/handlers/plants.handlers.php';
require_once BASE_PATH . '/utils/display.plants.utils.php';
require_once BASE_PATH . '/components/templates/header.component.php';

?>

<section class="hero container" aria-label="Interstellar Agriculture Hero" id="home">
    <h1 class="hero-title">Discover the Wonders of Interstellar Agriculture</h1>
    <p class="hero-subtitle">Cultivating plants that thrive among the stars.</p>
    <a href="/page/shop/index.php" class="btn btn-primary">Browse Our Plants</a>
</section>

<?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>