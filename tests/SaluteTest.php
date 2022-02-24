<?php

namespace Naviware\Salute\Tests;

use Naviware\Salute\Salute;
use \PHPUnit\Framework\TestCase;
/**
 * Class SampleTest
 *
 * @category Test
 * @package  Naviware\Salute
 * @author   Naviware <packagemanager@naviware.io>
 */
class SaluteTest extends TestCase
{
    public function testGreet() {
        $salute = new Salute();
        $greeting = $salute->greet();

        $this->assertEquals("Good evening", $greeting);
    }
}
