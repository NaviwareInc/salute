<?php

namespace Naviware\Salute;

use Carbon\Carbon;

/**
 * Class Salute
 *
 * @author  Naviware  <packagemanager@naviware.io>
 */
class Salute
{
    /**
     * @return  string
     */
    public function greet()
    {
        if ($this->getHour() < 12) {
            return 'Good morning';
        }
        if ($this->getHour() >= 12 && $this->getHour() < 17) {
            return 'Good afternoon';
        }

        return 'Good evening';
    }

    /**
     * Returns the current hour of the day
     * 
     * @return int
     */
    public function getHour() {
        return Carbon::now()->hour;
    }

}
