<?php
declare(strict_types=1);

namespace Src\FactoryMethod;

class Truck implements Transport
{

    public function deliver()
    {
        echo 'truck delivery';
    }
}