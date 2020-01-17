<?php
declare(strict_types=1);

namespace Src\Strategy;

class PublicTransportStrategy implements RouteStrategy
{
    public function buildRoute($pointA, $pointB)
    {
        echo  'Route by public transport' . PHP_EOL;
    }
}