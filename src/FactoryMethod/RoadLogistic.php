<?php
declare(strict_types=1);

namespace Src\FactoryMethod;

class RoadLogistic extends Logistics
{
    public function createTransport(): Transport
    {
        return new Truck();
    }
}