<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 5.2.19.
 * Time: 22.16
 */
namespace Sources\Classes;
use Sources\Interfaces\BuilderInterface;
use Sources\Parts\Car;
use Sources\Parts\Door;
use Sources\Parts\Engine;
use Sources\Parts\Vehicle;
use Sources\Parts\Wheel;

/**
 * Class CarBuilder
 * @package Sources\Classes
 */
class CarBuilder implements BuilderInterface
{

    /**
     * @var
     */
    private $car;

    /**
     *
     */
    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    /**
     *
     */
    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    /**
     *
     */
    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    /**
     *
     */
    public function createVehicle()
    {
        $this->car = new Car();
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}