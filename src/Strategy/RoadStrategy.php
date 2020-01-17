<?php
declare(strict_types=1);

namespace Src\Strategy;

class RoadStrategy implements RouteStrategy
{
    public function buildRoute($pointA, $pointB)
    {
        echo 'Route by road' . PHP_EOL;
    }
}