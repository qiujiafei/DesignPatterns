<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午6:15
 */
namespace DesignPatterns\Behavioral\Specification;

class AndSpecification implements SpecificationInterface
{
    private $specifications;

    public function __construct(SpecificationInterface ...$specification)
    {
        $this->specifications = $specification;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }

        return true;
    }
}