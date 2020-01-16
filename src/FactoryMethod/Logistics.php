<?php
declare(strict_types=1);

namespace Src\FactoryMethod;

abstract class Logistics
{
    public function planDelivery()
    {
        echo 'start plan';
    }

    abstract public function createTransport(): Transport;

}