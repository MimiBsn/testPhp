</main><!-- /.container -->
<div class="row">
    <div class="col md 4"></div>
    <div class="col-md-4">
        <?php
        // var_dump(dirname(__DIR__));
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'PHP' . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'compteur.php';
        addVues();
        $vues = nbrVues()
        ?>
        <p>Il y a <?= $vues?>
            visiteur<?php if($vues > 1):?>s<?php endif; ?>
            sur le site.</p>
    </div>
    <div class="col md 4">
        <?php
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'PHP' . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'buttonClicked.php';
        $click = nbrClick();
        if(isset($_POST['countBtn'])) {
            btnClicked();
            header("Location: " . $_SERVER['PHP_SELF']); //avoid submit on refresh
            exit();
        }?>
        <form method="POST">
            <input type="submit" name="countBtn" value="Click me">
        </form>
        <p>Vous avez cliqué
            <?= $click ?><?php if(!$click): ?>0<?php endif?>
            fois.
        </p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>


</body>

</html>