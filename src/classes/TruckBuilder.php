<?php
namespace Sources\Classes;
use Sources\Interfaces\BuilderInterface;
use Sources\Parts\Door;
use Sources\Parts\Engine;
use Sources\Parts\Truck;
use Sources\Parts\Vehicle;
use Sources\Parts\Wheel;

/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 5.2.19.
 * Time: 23.38
 */
class TruckBuilder implements BuilderInterface
{

    /**
     * @var
     */
    private $truck;

    /**
     *
     */
    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    /**
     *
     */
    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    /**
     *
     */
    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    /**
     *
     */
    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}