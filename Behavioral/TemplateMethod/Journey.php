<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午4:24
 */
namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Journey
{
    private $thingsToDo = [];

    final public function takeATrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();

        $gift = $this->buyGift();
        if ($gift !== null) {
            $this->thingsToDo[] = $gift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }

    abstract protected function enjoyVacation(): string;


    protected function buyGift()
    {
        return null;
    }

    protected function buyAFlight(): string
    {
        return 'Buy a flight ticket';
    }

    protected function takePlane(): string
    {
        return 'Taking the plane';
    }

    public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }
}