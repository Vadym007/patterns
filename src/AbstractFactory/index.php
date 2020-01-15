<?php

namespace Src\AbstractFactory;

require_once  __DIR__ . '/../../vendor/autoload.php';

$configs = [
//    'style' => 'modern',
    'style' => 'victorian',
];

$furniture = FurnitureFactory::create($configs['style']);

$chair = $furniture->createChair();
$chair->hasLegs();
$chair->sitOn();

$coffeeTable = $furniture->createCoffeeTable();
$coffeeTable->tableParams();

$sofa = $furniture->createSofa();
$sofa->length();
