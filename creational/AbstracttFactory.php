<?php

interface Door
{
    public function getDescription();
}

class WoodenDoor implements Door
{
    public function getDescription()
    {
        echo 'Iam Wooden Door';
    }
}

class IronDoor implements Door
{
    public function getDescription()
    {
        echo "iam iron Door";
    }
}

/*---------------------------------------------------------------------------*/

interface DoorFittingExpert
{
    public function getDescription();
}

class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        echo "i can only fit iron doors";
    }
}

class Carpenter implements DoorFittingExpert
{
    public function getDescription()
    {
        echo "i can only fit wooden doors";
    }
}

/*-----------------------------------------------------------------------------*/

interface DoorFactory
{
    public function makeDoor():Door;
    public function makeFittingExpert():DoorFittingExpert;

}

class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor():Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert():DoorFittingExpert
    {
        return new Carpenter();
    }
}

class IronDoorFactory implements DoorFactory
{
    public function makeDoor():Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert():DoorFittingExpert
    {
        return new Welder();
    }
}

/*----------------------------------------------------------------------------*/

$woodenFactory = new WoodenDoorFactory();

$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();

$door->getDescription();
$expert->getDescription();

$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();

$door->getDescription();
$expert->getDescription();

