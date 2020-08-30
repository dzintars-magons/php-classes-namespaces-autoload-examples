<?php
include '../vendor/autoloader.php';
use Prices\SpeakerPrices as Speakers;
use Payment\PaymentProcess\Process;
use Payment\PaymentMethod\Paypal;
use Payment\PaymentMethod\Bank;
use Payment\PaymentMethod\Cash;
use Payment\PaymentMethod\Visa;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP COOL THING</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
   <h1>HELLO</h1>
    <?php

    echo "<h2>JBL SPEAKERS</h2>";
    $jbl = new Speakers(555, 999, 1500);
    echo "Our lowest price for JBL speakers is " . $jbl->getLow() . ".";
    echo "<br>";
    echo "Our medium price for JBL speakers is " . $jbl->getMedium() . ".";
    echo "<br>";
    echo "Our highest price for JBL speakers is " . $jbl->getHigh() . ".";
    echo "<br>";
    echo "<br>";

    echo "<h2>CHINESE SPEAKERS</h2>";
    $chinese = new Speakers(200, 420,660);
    echo "Our lowest price for chinese speakers is " . $chinese->getLow() . ".";
    echo "<br>";
    echo "Our medium price for chinese speakers is " . $chinese->getMedium() . ".";
    echo "<br>";
    echo "Our highest price for chinese speakers is " . $chinese->getHigh() . ".";
    echo "<br>";
    echo "<br>";

    echo "<h2>USED SPEAKERS</h2>";
    $used = new Speakers(50, 100,300);
    echo "Our lowest price for used speakers is " . $used->getLow() . ".";
    echo "<br>";
    echo "Our medium price for used speakers is " . $used->getMedium() . ".";
    echo "<br>";
    echo "Our highest price for used speakers is " . $used->getHigh() . ".";
    echo "<br>";
    echo "<br>";

    // $buy = new Process;
    $process = new Process;
    $paypal = new Paypal;
    $bank = new Bank;
    $cash = new Cash;
    $visa = new Visa;
    echo "<h2>Your Pay Option</h2>";
    echo $process->pay($paypal);
    echo "<br>";
    echo $process->pay($bank);
    echo "<br>";
    echo $process->pay($cash);
    echo "<br>";
    echo $process->pay($visa);
    ?>
</body>
</html>
