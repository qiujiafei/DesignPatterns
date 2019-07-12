<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午5:44
 */
namespace DesignPatterns\Behavioral\Strategy;

interface ComparatorInterface
{
    public function compare($a, $b): int;
}