<?php
declare(strict_types=1);

namespace Src\AbstractFactory\Victorian;

use Src\AbstractFactory\Chair;

class VictorianChair implements Chair
{

    public function hasLegs()
    {
        echo 'Victorian chair with legs' . PHP_EOL;
    }

    public function sitOn()
    {
        echo 'Victorian chair sit on' . PHP_EOL;
    }
}