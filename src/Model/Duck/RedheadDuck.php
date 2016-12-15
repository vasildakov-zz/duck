<?php

namespace CoI\Model\Duck;

class RedheadDuck extends Duck
{
    public function fly()
    {
        return 'fly';
    }

    public function quack()
    {
        return 'quack';
    }

    public function display()
    {
        return "I'm a real Redhead duck";
    }
}
