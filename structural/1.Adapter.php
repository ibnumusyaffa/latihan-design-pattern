<?php

interface Lion
{
    public function roar();
}

class AfricanLion implements Lion
{
    public function roar()
    {

    }
}

class AsianLion implements Lion
{
    public function roar()
    {

    }
}

//And hunter expects any implementation of Lion interface to hunt.

class Hunter 
{
    public function hunt(Lion $lion)
    {

    }
}

class WildDog
{
    public function bark()
    {

    }
}

class WildDogAdapter implements Lion
{
    protected $dog;
    public function __construct(WildDog $dog)
    {
        $this->dog = $dog;
    }

    public function roar()
    {
        $this->dog->bark();
    }
}

$wilddog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wilddog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);