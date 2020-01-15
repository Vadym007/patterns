<?php
declare(strict_types=1);

namespace Src\AbstractFactory\Modern;

use Src\AbstractFactory\Chair;

class ModernChair implements Chair
{

    public function hasLegs()
    {
        echo 'Modern chair with legs' . PHP_EOL;
    }

    public function sitOn()
    {
        echo 'Modern chair sit on' . PHP_EOL;
    }
}