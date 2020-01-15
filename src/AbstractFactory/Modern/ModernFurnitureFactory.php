<?php
declare(strict_types=1);

namespace Src\AbstractFactory\Modern;

use Src\AbstractFactory\Chair;
use Src\AbstractFactory\CoffeeTable;
use Src\AbstractFactory\FurnitureFactoryInterface;
use Src\AbstractFactory\Sofa;

class ModernFurnitureFactory implements FurnitureFactoryInterface
{
    public function createChair(): Chair
    {
        echo 'created ' . ModernChair::class . PHP_EOL;
        return new ModernChair();
    }

    public function createCoffeeTable(): CoffeeTable
    {
        echo 'created ' . ModernCoffeeTable::class . PHP_EOL;
        return new ModernCoffeeTable();
    }

    public function createSofa(): Sofa
    {
        echo 'created ' . ModernSofa::class . PHP_EOL;
        return new ModernSofa();
    }
}