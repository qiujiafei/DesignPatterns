<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午4:54
 */
namespace DesignPatterns\Behavioral\Visitor;

interface Role
{
    public function accept(RoleVisitorInterface $visitor);
}