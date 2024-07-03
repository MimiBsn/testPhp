<?php
error_reporting(E_ALL);
include 'header.php';
require './class/Counter.php';
require './class/ClickCounter.php';

$counterViews = new Counter();
$counterClicks = new ClickCounter();
?>

<body>
    <div class="container">

        <h1>Hello, world!</h1>
    </div>
    <div class="container">
        <?php
        $counterViews->addViews();
$views = $counterViews->showViews();
echo "{$views} user" . (($views > 1) ? 's' : '') . " saw this website.";
?>
    </div>
    <div class="container">
        <?php

if(isset($_POST['clickBtn'])) {
    $counterClicks->addViews();
    header("Location: " . $_SERVER['PHP_SELF']); //avoid submit on refresh
    exit();
}
$click = $counterClicks->showViews();
?>
        <form method="POST">
            <button class="btn btn-primary" type="submit" name="clickBtn">Click ?</button>
        </form>
        <?= "You clicked {$click}" . (!$click) ? 0 : '' . "times"; ?>
    </div>


    <?php include 'footer.php'; ?>