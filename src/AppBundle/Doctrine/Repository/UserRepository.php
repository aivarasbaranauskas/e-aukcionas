<?php

namespace AppBundle\Doctrine\Repository;

use AppBundle\Entity\User;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    const ROLE_USER = 1;
    const ROLE_MODERATOR = 3;
    const ROLE_ADMIN = 5;

    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function exists($username, $password)
    {
        $exists = false;
        /** @var User $user */
        $user = $this->findOneBy(['username' => $username, 'active' => true]);

        if (null !== $user) {
            $password = md5($password);
            if ($password == $user->getPassword()) {
                $exists = true;
            }
        }

        return $exists;
    }

    /**
     * @param User $user
     */
    public function register($user)
    {
        $user->setPassword(md5($user->getPassword()));
        $user->setRole(static::ROLE_USER);
        $user->setActive(true);

        $date = new \DateTime();
        $user->setCreated($date);
        $user->setLastUpdated($date);

        $this->_em->persist($user);
        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
    }

    /**
     * @param string $username
     * @param string $loginToken
     * @return User|null
     */
    public function isLoggedIn($username, $loginToken)
    {
        $loggedIn = null;
        /** @var User $user */
        $user = $this->findOneBy(['username' => $username, 'active' => true]);
        if (null !== $user) {
            $expectedToken = md5($user->getUsername().$user->getPassword());
            if ($expectedToken == $loginToken) {
                $loggedIn = $user;
            }
        }

        return $loggedIn;
    }

    /**
     * @param User $user
     */
    public function update($user)
    {
        $date = new \DateTime();
        $user->setLastUpdated($date);

        $this->_em->persist($user);
        $this->getEntityManager()->flush();
        $this->getEntityManager()->clear();
    }
}
