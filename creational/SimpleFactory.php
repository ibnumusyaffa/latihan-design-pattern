<?php


/* 

Simple factory simply generates an instance for client without exposing any instantiation logic to the client

Wikipedia says:
In object-oriented programming (OOP),
a factory is an object for creating other objects – 
formally a factory is a function or method that returns objects of a varying prototype or class from some method call, 
which is assumed to be "new".

*/

interface Door
{
    public  function getWidth():float;
    public  function getHeight():float;
}

class WoodenDoor implements Door
{
    protected $width;
    protected $height;

    public function __construct(float $width, float $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth():float
    {
        return $this->width;
    }

    public function getHeight():float
    {
        return $this->height;
    }

}

class DoorFactory
{
    public static function makeDoor($width,$height):Door
    {
        return new WoodenDoor($width,$height);
    }
}

$door = DoorFactory::makeDoor(100, 200);
echo $door->getWidth();
echo $door->getHeight();

?>