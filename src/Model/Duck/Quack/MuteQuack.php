<?php

namespace CoI\Model\Duck\Quack;

class MuteQuack implements Quackable
{
    public function quack()
    {
        return "Silence";
    }
}
