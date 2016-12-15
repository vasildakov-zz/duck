<?php

namespace CoI\Model\Duck\Fly;

class CannotFly implements Flyable
{
    public function fly()
    {
        return "I can't fly!";
    }
}
