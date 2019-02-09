<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 5.2.19.
 * Time: 22.13
 */
namespace Sources\Parts;
/**
 * Class Vehicle
 * @package Sources\Parts
 */
abstract class Vehicle
{
    /**
     * @var array
     */
    private $data=[];

    /**
     * @param $key
     * @param $value
     */
    public function setPart($key, $value)
    {
        $this->data['key']=$value;
    }
}
