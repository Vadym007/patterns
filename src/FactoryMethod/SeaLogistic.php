<?php
declare(strict_types=1);

namespace Src\FactoryMethod;

class SeaLogistic extends Logistics
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}