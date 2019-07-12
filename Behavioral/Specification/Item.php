<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午6:13
 */
namespace DesignPatterns\Behavioral\Specification;

class Item
{
    private $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }


    public function getPrice(): float
    {
        return $this->price;
    }
}