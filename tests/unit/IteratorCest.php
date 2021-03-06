<?php
/**
 * @link      https://github.com/index0h/yii2-phar
 * @copyright Copyright (c) 2014 Roman Levishchenko <index.0h@gmail.com>
 * @license   https://raw.github.com/index0h/yii2-phar/master/LICENSE
 */

/**
 * Check index0h\phar\iterators\***.
 *
 * @author Roman Levishchenko <index.0h@gmail.com>
 */
class IteratorCest
{
    public function testAllFilesFound(CodeGuy $I)
    {
        $module = $I->createModuleForIterator();
        $actual = $I->getAllFilesFromIteratorByModule($module);
        $I->seeAllFilesFoundByIterator($actual);
    }
}
