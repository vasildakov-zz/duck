<?php
namespace CoI\ModelTest\Duck;

use CoI\Model\Duck\Duck;
use CoI\Model\Duck\MallardDuck;
use CoI\Model\Duck\Quack\Quack;
use CoI\Model\Duck\Fly\FlyWithWings;

class MallardDuckTest extends \PHPUnit_Framework_TestCase
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
        $duck = new MallardDuck($this->flyable, $this->quackable);

        self::assertInstanceOf(MallardDuck::class, $duck);
    }

    /**
     * @test
     */
    public function itCanSwim()
    {
        $duck = new MallardDuck($this->flyable, $this->quackable);

        self::assertEquals("All ducks float, even decoys!", $duck->swim());
    }

    /**
     * @test
     */
    public function itCanDisplay()
    {
        $duck = new MallardDuck($this->flyable, $this->quackable);

        self::assertEquals("I'm a real Mallard duck", $duck->display());
    }

    /**
     * @test
     */
    public function itCanFly()
    {
        $duck = new MallardDuck($this->flyable, $this->quackable);

        self::assertEquals("I'm flying!!", $duck->fly());
    }

    /**
     * @test
     */
    public function itCanQuack()
    {
        $duck = new MallardDuck($this->flyable, $this->quackable);

        self::assertEquals('Quack', $duck->quack());
    }
}
