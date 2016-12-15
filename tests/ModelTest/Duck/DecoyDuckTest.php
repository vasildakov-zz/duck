<?php
namespace CoI\ModelTest\Duck;

use CoI\Model\Duck\Duck;
use CoI\Model\Duck\DecoyDuck;
use CoI\Model\Duck\Quack\MuteQuack;
use CoI\Model\Duck\Fly\CannotFly;

class DecoyDuckTest extends \PHPUnit_Framework_TestCase
{
    protected $flyable;

    protected $quackable;

    protected function setUp()
    {
        $this->flyable = new CannotFly();

        $this->quackable = new MuteQuack();
    }

    /**
     * @test
     */
    public function itCanBeConstructed()
    {
        $duck = new DecoyDuck($this->flyable, $this->quackable);
        self::assertInstanceOf(DecoyDuck::class, $duck);
    }

    /**
     * @test
     */
    public function itCanDisplay()
    {
        $duck = new DecoyDuck($this->flyable, $this->quackable);

        self::assertEquals("I'm a Decoy duck", $duck->display());
    }

    /**
     * @test
     */
    public function itCanFly()
    {
        $duck = new DecoyDuck($this->flyable, $this->quackable);

        self::assertEquals("I can't fly!", $duck->fly());
    }

    /**
     * @test
     */
    public function itCanQuack()
    {
        $duck = new DecoyDuck($this->flyable, $this->quackable);

        self::assertEquals("Silence", $duck->quack());
    }
}
