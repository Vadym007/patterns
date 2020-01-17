<?php
declare(strict_types=1);

namespace Src\Strategy;

class Navigator
{
    protected $routeStrategy;

    public function setRouteStrategy(RouteStrategy $routeStrategy)
    {
        $this->routeStrategy = $routeStrategy;
    }

    public function navigate($pointA, $pointB)
    {
        $route = $this->routeStrategy->buildRoute($pointA, $pointB);
        //to do something
    }
}
