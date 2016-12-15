<?php

namespace CoI\Model\Duck\Fly;

class FlyWithWings implements Flyable
{
    public function fly()
    {
        return "I'm flying!!";
    }
}
