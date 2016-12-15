<?php
/**
 * This file is part of the vasildakov/duck project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Vasil Dakov <vasildakov@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link https://github.com/vasildakov/duck GitHub
 */

namespace CoI\Model\Duck;

use CoI\Model\Duck\Fly\Flyable;
use CoI\Model\Duck\Quack\Quackable;

/**
 * Class Duck
 *
 * @package Model
 * @author Vasil Dakov <vasildakov@gmail.com>
 */
abstract class Duck
{
    /**
     * @var \CoI\Model\Duck\Fly\Flyable
     */
    public $flyable;

    /**
     * @var \CoI\Model\Duck\Quick\Quackable
     */
    public $quackable;

    /**
     * @param \CoI\Model\Duck\Fly\Flyable     $flyable
     * @param \CoI\Model\Duck\Quick\Quackable $quackable
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
