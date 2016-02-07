<?php

namespace Vitalias\Socials\Contracts;

interface Factory
{
    /**
     * Get an OAuth provider implementation.
     *
     * @param  string  $driver
     * @return \Vitalias\Socials\Contracts\Provider
     */
    public function driver($driver = null);
}
