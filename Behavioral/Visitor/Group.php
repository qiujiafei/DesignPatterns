<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午4:55
 */
namespace DesignPatterns\Behavioral\Visitor;

class Group implements Role
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return sprintf("Group: %s", $this->name);
    }



    public function accept(RoleVisitorInterface $visitor)
    {
        $visitor->visitgroup($this);
    }
}