<?php
declare(strict_types=1);

namespace Src\Strategy;

class WalkingStrategy implements RouteStrategy
{
    public function buildRoute($pointA, $pointB)
    {
        echo 'Route by walking' . PHP_EOL;
    }
}