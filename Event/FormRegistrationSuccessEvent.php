<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Event;


class FormRegistrationSuccessEvent extends FormEvent
{
    /**
     * @var bool
     */
    private $confirmationRequired = true;

    /**
     * @return bool
     */
    public function isConfirmationRequired()
    {
        return $this->confirmationRequired;
    }

    /**
     * @param bool $confirmationRequired
     */
    public function setConfirmationRequired($confirmationRequired)
    {
        $this->confirmationRequired = $confirmationRequired;
    }
}
