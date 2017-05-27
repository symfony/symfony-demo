<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Utils;

class Validator
{
    /**
     * @param string $username
     *
     * @return string
     * @throws \Exception
     */
    public function username($username)
    {
        if (empty($username)) {
            throw new \Exception('The username can not be empty.');
        }

        if (1 !== preg_match('/^[a-z_]+$/', $username)) {
            throw new \Exception('The username must contain only lowercase latin characters and underscores.');
        }

        return $username;
    }

    /**
     * @param string $plainPassword
     *
     * @return string
     * @throws \Exception
     */
    public function password($plainPassword)
    {
        if (empty($plainPassword)) {
            throw new \Exception('The password can not be empty.');
        }

        if (mb_strlen(trim($plainPassword)) < 6) {
            throw new \Exception('The password must be at least 6 characters long.');
        }

        return $plainPassword;
    }

    /**
     * @param string $email
     *
     * @return string
     * @throws \Exception
     */
    public function email($email)
    {
        if (empty($email)) {
            throw new \Exception('The email can not be empty.');
        }

        if (false === mb_strpos($email, '@')) {
            throw new \Exception('The email should look like a real email.');
        }

        return $email;
    }

    /**
     * @param string $fullName
     *
     * @return string
     * @throws \Exception
     */
    public function fullName($fullName)
    {
        if (empty($fullName)) {
            throw new \Exception('The full name can not be empty.');
        }

        return $fullName;
    }
}
