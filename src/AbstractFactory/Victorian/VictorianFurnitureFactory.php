<?php
declare(strict_types=1);

namespace Src\AbstractFactory\Victorian;

use Src\AbstractFactory\Chair;
use Src\AbstractFactory\CoffeeTable;
use Src\AbstractFactory\FurnitureFactoryInterface;
use Src\AbstractFactory\Sofa;

class VictorianFurnitureFactory implements FurnitureFactoryInterface
{
    public function createChair(): Chair
    {
        echo 'created ' . VictorianChair::class . PHP_EOL;
        return new VictorianChair();
    }

    public function createCoffeeTable(): CoffeeTable
    {
        echo 'created ' . VictorianCoffeeTable::class . PHP_EOL;
        return new VictorianCoffeeTable();
    }

    public function createSofa(): Sofa
    {
        echo 'created ' . VictorianSofa::class . PHP_EOL;
        return new VictorianSofa();
    }
}