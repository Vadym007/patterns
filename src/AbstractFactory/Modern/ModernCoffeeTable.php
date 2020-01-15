<?php
declare(strict_types=1);

namespace Src\AbstractFactory\Modern;

use Src\AbstractFactory\CoffeeTable;

class ModernCoffeeTable implements CoffeeTable
{
    public function tableParams()
    {
        echo "Params moder coffee table" . PHP_EOL;
    }
}