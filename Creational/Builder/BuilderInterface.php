<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 9:49 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addDoors();

    public function addEngine();

    public function getVehicle(): Vehicle;
}