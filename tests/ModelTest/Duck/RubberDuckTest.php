<?php
namespace CoI\ModelTest\Duck;

use CoI\Model\Duck\Duck;
use CoI\Model\Duck\RubberDuck;
use CoI\Model\Duck\Quack\Squeak;
use CoI\Model\Duck\Fly\CannotFly;

class RubberDuckTest extends \PHPUnit_Framework_TestCase
{
    protected $flyable;

    protected $quackable;

    protected function setUp()
    {
        $this->flyable = new CannotFly();

        $this->quackable = new Squeak();
    }

    /**
     * @test
     */
    public function itCanBeConstructed()
    {
        $duck = new RubberDuck($this->flyable, $this->quackable);

        self::assertTrue(is_subclass_of($duck, Duck::class));

        self::assertInstanceOf(RubberDuck::class, $duck);
    }

    /**
     * @test
     */
    public function itCanFly()
    {
        $duck = new RubberDuck($this->flyable, $this->quackable);

        self::assertEquals("I can't fly!", $duck->fly());
    }

    /**
     * @test
     */
    public function itCanQuack()
    {
        $duck = new RubberDuck($this->flyable, $this->quackable);

        self::assertEquals("Squeak", $duck->quack());
    }


    /**
     * @test
     */
    public function itCanSwim()
    {
        $duck = new RubberDuck($this->flyable, $this->quackable);

        self::assertEquals("All ducks float, even decoys!", $duck->swim());
    }

    /**
     * @test
     */
    public function itCanDisplay()
    {
        $duck = new RubberDuck($this->flyable, $this->quackable);

        self::assertEquals("I'm a Rubber duck", $duck->display());
    }
}
