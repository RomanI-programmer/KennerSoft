<?php

use KennerSoft\Factory\FactoryRobot;
use KennerSoft\Merge\MergeRoot;
use KennerSoft\Model\Robot1;
use KennerSoft\Model\Robot2;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoloader.php';

$factory = new FactoryRobot();
$factory
    ->setRobot1(new Robot1(300,10,15))
    ->setRobot2(new Robot2(500,25,10));

echo '<pre>';
print_r($factory->createRobot1(5));
echo '</pre>';

echo '<pre>';
print_r($factory->createRobot2(2));
echo '</pre>';

$merge = new MergeRoot();
$merge
    ->addRobot(new Robot2())
    ->addRobots($factory->createRobot2(2));

echo "MERGE:" . "<br>";
$response = $factory->createMergeRobot($merge);
echo "Speed: " . $response->getSpeed() . "<br>";
echo "Weight: " . $response->getWeight() . "<br>";

?>




