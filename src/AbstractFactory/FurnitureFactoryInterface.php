<?php

namespace Src\AbstractFactory;

interface FurnitureFactoryInterface
{
    public function createChair(): Chair;

    public function createCoffeeTable(): CoffeeTable;

    public function createSofa(): Sofa;
}