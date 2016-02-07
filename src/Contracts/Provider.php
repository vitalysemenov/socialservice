<?php

namespace Vitalias\Socials\Contracts;

interface Provider
{
    /**
     * Redirect the user to the authentication page for the provider.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect();

    /**
     * Get the User instance for the authenticated user.
     *
     * @return \Vitalias\Socials\Contracts\User
     */
    public function user();

    /**
     * Get the User instance for the authenticated user.
     *
     * @return \Vitalias\Socials\Contracts\Freinds
     */
    //public function friends();
}
