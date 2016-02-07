<?php

namespace Vitalias\Socials\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vitalias\Socials\Services
 */
class SocialServices extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Vitalias\Socials\Contracts\Factory';
    }
}
