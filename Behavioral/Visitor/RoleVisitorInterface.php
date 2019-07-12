<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午4:50
 */
namespace DesignPatterns\Behavioral\Visitor;

interface RoleVisitorInterface
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}