<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require './class/Counter.php';
require './class/ClickCounter.php';

$setIncrementCounterViews = true;
$setIncrementClickViews = false;

if(isset($_POST['clickBtn'])) {
    $setIncrementClickViews = true;
    $setIncrementCounterViews = false;
}

$counterViews = new Counter($setIncrementCounterViews);
$views = $counterViews->getViews();


$counterClicks = new ClickCounter($setIncrementClickViews);
$click = $counterClicks->getViews();


include 'header.php';
?>

<body>
    <div class="container">

        <h1>Hello, world!</h1>
    </div>
    <div class="container">
        <?php

echo "{$views} user" . (($views > 1) ? 's' : '') . " saw this website.";
?>
    </div>
    <div class="container">
        <?php



?>
        <form method="POST">
            <input class="btn btn-primary" type="submit" name="clickBtn" value="Click ?">
        </form>

        <?= (($click) ? "You clicked {$click} times." : ""); ?>

    </div>



    <?php include 'footer.php'; ?>