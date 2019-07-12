<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午5:44
 */
namespace DesignPatterns\Behavioral\Strategy;

class DateComparator implements ComparatorInterface
{
    public function compare($a, $b): int
    {
        $dateA = new \DateTime($a['date']);
        $dateB = new \DateTime($b['date']);

        return $dateA <=> $dateB;
    }
}