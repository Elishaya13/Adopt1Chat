<?php
require_once(__DIR__ . '/components/const.php');

$title = "Home";
$h1 = "Adopt 1 chat";

?>

<!--Header-->
<?php require_once(__DIR__ . '/components/header.php'); ?>

<!--Main-->
<main>
   <?php require_once(__DIR__ . '/components/index/about.php'); ?>
    <div class="container">
      <?php require_once(__DIR__ . '/components/index/new_cat.php'); ?>
      <?php require_once(__DIR__ . '/components/index/news.php'); ?>      
    </div>
    <?php require_once(__DIR__ . '/components/index/modal.php'); ?>
   
</main>


<!--Footer-->
<?php require_once(__DIR__ . '/components/footer.php'); ?>