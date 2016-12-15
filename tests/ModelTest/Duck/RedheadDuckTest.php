<?php
namespace CoI\ModelTest\Duck;

use CoI\Model\Duck\Duck;
use CoI\Model\Duck\RedheadDuck;
use CoI\Model\Duck\Quack\Quack;
use CoI\Model\Duck\Fly\FlyWithWings;

class RedheadDuckTest extends \PHPUnit_Framework_TestCase
{
    protected $flyable;

    protected $quackable;

    protected function setUp()
    {
        $this->flyable = new FlyWithWings();

        $this->quackable = new Quack();
    }

    /**
     * @test
     */
    public function itCanBeConstructed()
    {
        $duck = new RedheadDuck($this->flyable, $this->quackable);

        self::assertInstanceOf(RedheadDuck::class, $duck);
    }


    /**
     * @test
     */
    public function itCanDisplay()
    {
        $duck = new RedheadDuck($this->flyable, $this->quackable);

        self::assertEquals("I'm a real Redhead duck", $duck->display());
    }
}
