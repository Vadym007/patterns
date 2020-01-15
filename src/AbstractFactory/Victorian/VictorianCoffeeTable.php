<?php
declare(strict_types=1);

namespace Src\AbstractFactory\Victorian;

use Src\AbstractFactory\CoffeeTable;

class VictorianCoffeeTable implements CoffeeTable
{
    public function tableParams()
    {
        echo "Params victorian coffee table" . PHP_EOL;
    }
}