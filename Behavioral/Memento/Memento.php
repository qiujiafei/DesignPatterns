<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-4-26
 * Time: 下午3:33
 */

namespace DesignPatterns\Behavioral\Memento;

class Memento
{
    /**
     * @var State
     */
    private $state;

    /**
     * @param State $stateToSave
     */
    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    /**
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }
}