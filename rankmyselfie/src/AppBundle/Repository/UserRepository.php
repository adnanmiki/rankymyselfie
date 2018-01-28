<?php
namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{

    public function updateProfileViews($username, $id)
    {}

    public function findUserbyMailorUsername($userid, $password)
    {
        return $this->getEntityManager()
            ->createQuery('
          SELECT u FROM AppBundle:User  u
          WHERE (u.mail = :userid or u.username= :userid) and u.password= :password')
            ->setParameter('userid', $userid)
            ->setParameter('password', $password)
            ->getResult();
    }
}
