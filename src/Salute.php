<?php

namespace Naviware\Salute;

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
        $hour = Carbon::now()->hour;
        if ($hour < 12) {
            return 'Good morning';
        }
        if ($hour >= 12 && $hour < 17) {
            return 'Good afternoon';
        }

        return 'Good evening';
    }

}
