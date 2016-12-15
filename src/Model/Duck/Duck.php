<?php

namespace CoI\Model\Duck;

use CoI\Model\Duck\Fly\Flyable;
use CoI\Model\Duck\Quack\Quackable;

abstract class Duck
{
    /**
     * @var Flyable
     */
    public $flyable;

    /**
     * @var Quackable
     */
    public $quackable;

    /**
     * @param Flyable   $flyable
     * @param Quackable $quackable
     */
    public function __construct(Flyable $flyable, Quackable $quackable)
    {
        $this->flyable   = $flyable;
        $this->quackable = $quackable;
    }


    public function quack()
    {
        return $this->quackable->quack();
    }


    public function fly()
    {
        return $this->flyable->fly();
    }

    abstract protected function display();


    public function swim()
    {
        return 'All ducks float, even decoys!';
    }
}
