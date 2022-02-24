<?php

namespace Naviware\Naviware;

/**
 * Class Sample
 *
 * @author  Naviware  <packagemanager@naviware.io>
 */
class Sample
{

    /**
     * @var  \Naviware\Salute\Config
     */
    private $config;

    /**
     * Sample constructor.
     *
     * @param \Naviware\Salute\Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param $name
     *
     * @return  string
     */
    public function sayHello($name)
    {
        $greeting = $this->config->get('greeting');

        return $greeting . ' ' . $name;
    }

}
