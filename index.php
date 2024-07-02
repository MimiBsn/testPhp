<?php
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
        <form>
            <button class="btn btn-primary" type="submit">Click ?</button>
        </form>
    </div>


    <?php include 'footer.php'; ?>