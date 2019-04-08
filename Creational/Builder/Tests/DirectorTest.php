<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 10:13 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        //先实现 BuilderInterface 接口
        $truckBuilder = new TruckBuilder();

        //再将实现好 BuilderInterface 的对象传入构建器中
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuild = new CarBuilder();
        $newVehicle = (new Director())->build($carBuild);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}