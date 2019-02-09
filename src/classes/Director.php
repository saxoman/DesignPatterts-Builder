<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 5.2.19.
 * Time: 21.53
 */
namespace Sources\Classes;
use Sources\Interfaces\BuilderInterface;
use Sources\Parts\Vehicle;



class Director
{
    /**
     * @param BuilderInterface $builder
     * @return Vehicle
     */
    public function build(BuilderInterface $builder):Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();
        return $builder->getVehicle();
    }
}