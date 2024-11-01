<?php

declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . '/../src/utils.php';

use App\utils;

echo 'Generating random numbers into an Array <br>';

$arrOne = [];
$counter = 0;
foreach (utils\generateRandomNumbers(1000000) as $value) {
    $counter++;
    if ($counter % 100000 === 0) {
        utils\printMemoryUsage();
    }
}
echo '<br><br>';

echo 'Generating random numbers with a generator: <br>';

$counter2 = 0;
foreach (utils\randomNumbersWithGenerator(1000000) as $value) {
    $counter2++;
    if ($counter2 % 100000 === 0) {
        utils\printMemoryUsage();
    }
}
