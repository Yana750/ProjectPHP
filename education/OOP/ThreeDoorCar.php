<?php
class ThreeDoorCar extends AbstractCar
{
    private const DOOR_COUNT = 3;

    public static function getDoorCount(): int
    {
        return self::DOOR_COUNT;
    }
}