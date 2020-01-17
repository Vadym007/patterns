<?php

namespace Src\Strategy;

interface RouteStrategy
{
    public function buildRoute($pointA, $pointB);
}