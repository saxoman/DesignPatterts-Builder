<?php
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 5.2.19.
 * Time: 21.40
 */
require "vendor/autoload.php";
/*
 * Builder is an interface that build parts of a complex object.

Sometimes, if the builder has a better knowledge of what it builds,

this interface could be an abstract class with default methods (aka adapter).

If you have a complex inheritance tree for objects, it is logical to have a complex inheritance tree for builders too.

Note: Builders have often a fluent interface, see the mock builder of PHPUnit for example.

https://designpatternsphp.readthedocs.io/en/latest/Creational/Builder/README.html

 */

