<?php

namespace CoI\Model\Duck;

class RubberDuck extends Duck
{
    public function quack()
    {
        return 'quack';
    }

    public function display()
    {
        return "I'm a Rubber duck";
    }
}
