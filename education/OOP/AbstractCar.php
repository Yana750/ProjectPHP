<?php
require 'CarMoveForwardableInterface.php';
require 'CarEngineInterface.php';

//require
//require_once
//include
//include_once

abstract class AbstractCar implements CarEngineInterface, CarMoveForwardableInterface
{
    // private - доступен только внутри класса
    // protected - доступен внутри класса и для наследников
    // public - публично доступен всем

    private $color;

    private $engineState = 'off';

    public function __construct($color)
    {
        $this->color = $color;
        // вызается при создании экземпляра
    }

    public function __destruct()
    {
        // вызывается при разрушении экземпяра
    }

    public function runEngine(): void
    {
        $this->engineState = 'run';
    }

    public function moveForward(): void
    {
        //
    }
}