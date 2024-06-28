<?php
$title = 'Contact us';
$nav = 'contact';
require_once 'config.php';
require_once 'functions.php';
$creneaux = creneaux_html(CRENEAUX);
require 'header.php';
?>

<div class="row">
    <div class="col-md-8">
        <h2>Contact us</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolor, aliquam eligendi hic reprehenderit
            earum
            animi quibusdam accusamus magnam repellat ab laboriosam amet cumque asperiores officiis totam. Aliquid,
            veritatis
            et.</p>
    </div>
    <div class="col-md-4">
        <h2>Open hours</h2>
        <?= $creneaux ?>
    </div>
</div>


<?php
require 'footer.php';
?>