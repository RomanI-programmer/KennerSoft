<?php

use KennerSoft\Factory\FactoryRobot;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoloader.php';

$factory = new FactoryRobot();
echo '<pre>';
print_r($factory->createRobot1(2));
echo '</pre>';

echo '<pre>';
print_r($factory->createRobot2(1));
echo '</pre>';

?>




