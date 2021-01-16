<?php

use KennerSoft\src\FactoryRobot;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$factory = new FactoryRobot();
echo '<pre>';
print_r($factory->createRobot1(2));
echo '</pre>';

echo '<pre>';
print_r($factory->createRobot2(1));
echo '</pre>';

?>




