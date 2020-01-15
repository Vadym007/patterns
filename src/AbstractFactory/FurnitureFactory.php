<?php
declare(strict_types=1);

namespace Src\AbstractFactory;

use Src\AbstractFactory\Modern\ModernFurnitureFactory;
use Src\AbstractFactory\Victorian\VictorianFurnitureFactory;

class FurnitureFactory
{
    public static function create(string $style): FurnitureFactoryInterface
    {
        switch ($style) {
            case 'modern':
                return new ModernFurnitureFactory();
            case 'victorian':
                return new VictorianFurnitureFactory();
            default:
                throw new \Exception("For $style style factory not exists");
        }
    }
}