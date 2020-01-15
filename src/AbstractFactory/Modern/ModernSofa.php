<?php
declare(strict_types=1);

namespace Src\AbstractFactory\Modern;

use Src\AbstractFactory\Sofa;

class ModernSofa implements Sofa
{

    public function length()
    {
        echo 'Modern sofa length' . PHP_EOL;
    }
}