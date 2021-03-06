<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Foundation\ILaptopBuilder;

// 'ConcreteBuilder' class - implements 'Builder' interface

/**
 * There may be any number of concrete builder classes inheriting from Builder.
 * These classes contain the functionality to create a particular complex product.
 */
class NormalLaptopBuilder implements ILaptopBuilder
{
    protected $laptop;

    public function __construct(Laptop $laptop)
    {
        $this->laptop = $laptop;
    }

    public function addModelNumber()
    {
        $this->laptop->modelNumber = 'Normal1001';
    }

    public function addDisplay()
    {
        $this->laptop->display = 'Full HD display';
    }

    public function addRAM()
    {
        $this->laptop->RAM = '20 GB';
    }

    public function addGraphicCard()
    {
        $this->laptop->graphicCard = 'Nvidia GeForce';
    }

    public function addTouchScreen()
    {
        $this->laptop->touchScreen = 'No!';
    }

    public function getLaptop(): Laptop
    {
        return $this->laptop;
    }
}
