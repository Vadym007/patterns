<?php
declare(strict_types=1);

namespace Src\AbstractFactory\Victorian;

use Src\AbstractFactory\Sofa;

class VictorianSofa implements Sofa
{
    public function length()
    {
        echo 'Victorian sofa length' . PHP_EOL;
    }
}