<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午5:44
 */
namespace DesignPatterns\Behavioral\Strategy;

class IdComparator implements ComparatorInterface
{
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}