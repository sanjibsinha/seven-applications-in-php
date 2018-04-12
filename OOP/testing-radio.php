<?php
require '../vendor/autoload.php';

$antena = new Sanjib\Antena();
$power = new Sanjib\Power();
$sound = new Sanjib\Speaker();

$radio = new Sanjib\Radio($power);
echo $radio->switchOn($power)->getSignal($antena)->produceSound($sound);

$reflect = new ReflectionClass($radio);

echo '<pre>';
print_r($reflect->getMethods());

$reflectOnMethod = new ReflectionMethod("Sanjib\Radio", "getData");

echo '<pre>';

print_r(get_class_methods($reflectOnMethod));