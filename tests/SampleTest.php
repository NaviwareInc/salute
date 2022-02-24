<?php

namespace Naviware\Salute\Tests;

use Naviware\Salute\Config;
use Naviware\Salute\Sample;

/**
 * Class SampleTest
 *
 * @category Test
 * @package  Naviware\Salute\Tests
 * @author   Naviware <packagemanager@naviware.io>
 */
class SampleTest extends TestCase
{

    public function testSayHello()
    {
        $config = new Config();
        $sample = new Sample($config);

        $name = 'Naviware';

        $result = $sample->sayHello($name);

        $expected = $config->get('greeting') . ' ' . $name;

        $this->assertEquals($result, $expected);

    }

}
