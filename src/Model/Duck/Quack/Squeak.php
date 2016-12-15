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

namespace CoI\Model\Duck\Quack;

/**
 * Class Squeak
 *
 * @package Model
 * @author Vasil Dakov <vasildakov@gmail.com>
 */
final class Squeak implements Quackable
{
    public function quack()
    {
        return "Squeak";
    }
}
