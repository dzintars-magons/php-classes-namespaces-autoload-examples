<?php
include '../vendor/autoloader.php';
use Prices\SpeakerPrices as Speakers;
use Payment\PaymentProcess\Process as BuyProcess;
use Payment\PaymentMethod\{Paypal, Bank, Cash, Visa};
use Payment\PaymentMethod\TestMethod as Test;
use Database\Database;
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

    // $newconn = new Database;
    // $newconn->connectToDatabase();

    echo "<h1>CREATING WORDS</h1>";

    echo 
    "<form method='post' action='/'>
        <input type='text' name='word-1' id='word-1'>
        <input type='text' name='word-2' id='word-2'>
        <input type='text' name='word-3' id='word-3'>
        <button type='submit' name='word-submit' value='Submit'>SAVE NEW WORDS</button>
        <br>
        <button type='submit' name='clean' value='clean'>CLEAN WORDS</button>
    </form>";
    if ($_POST['word-submit'] == "Submit") {
        
            $newpost = new Database;
            $newpost->addWords();
            $newpost->clean(); 
        
    }
    // $newconn->addWords();

    echo "<h1>TEST YOUR KNOWLEDGE</h1>
            <br> 
            <form method='get' action='/'>
                <input type='text' name='word-1' id='word-1' placeholder='break'>
                <input type='text' name='word-2' id='word-2'>
                <input type='text' name='word-3' id='word-3'>
                <button type='submit' name='learn' value='learn'>TEST YOURSELF</button>
            </form>";

            if ($_GET['learn'] == "learn") {
                
                $learn = new Database;
                $learn->search();
            
        }


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
    $process = new BuyProcess;
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
    echo "<br>";
    echo "<br>";
    echo "<h2>Testing using an Abstract class below</h2>";
    // test below
    $test = new Test;
    echo $test->payNow();
    ?>
</body>
</html>
