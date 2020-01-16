<?php
declare(strict_types=1);

namespace Src\FactoryMethod;

class Ship implements Transport
{
    public function deliver()
    {
        echo "ship delivery";
    }
}