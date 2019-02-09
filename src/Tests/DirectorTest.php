<?php
namespace Sources\Tests;
use PHPUnit\Framework\TestCase;
use Sources\Classes\CarBuilder;
use Sources\Classes\Director;
use Sources\Classes\TruckBuilder;
use Sources\Parts\Car;
use Sources\Parts\Truck;

/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 5.2.19.
 * Time: 23.41
 */
class DirectorTest extends TestCase
{
    /**
     *
     */
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    /**
     *
     */
    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}