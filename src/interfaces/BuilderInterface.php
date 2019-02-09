<?php
namespace Sources\Interfaces;
use Sources\Parts\Vehicle;

/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 5.2.19.
 * Time: 21.54
 */
interface BuilderInterface{
    /**
     * @return mixed
     */
    public function createVehicle();

    /**
     * @return mixed
     */
    public function addWheel();

    /**
     * @return mixed
     */
    public function addEngine();

    /**
     * @return mixed
     */
    public function addDoors();

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}