<?php
// src/AppBundle/Repository/ProductRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ImageRepository extends EntityRepository
{

    public function findAllImagesByUserID($userid)
    {
        return $this->getEntityManager()
            ->createQuery('
          SELECT i FROM AppBundle:Image  i
          WHERE i.userid = :userid')
            ->setParameter('userid', $userid)
            ->getResult();
    }

    public function deleteImageByUseridandImageId($userid, $imageid)
    {
        return $this->getEntityManager()
            ->createQuery('
          DELETE FROM AppBundle:Image  i
          WHERE i.userid = :userid and i.id= :imageid')
            ->setParameter('userid', $userid)
            ->setParameter('imageid', $imageid)
            ->getResult();
    }

    public function saveImageByUseridandImageId($userid, $imageid, $pictitel, $picdesc)
    {
        
        return $this->getEntityManager()
            ->createQuery('
          UPDATE AppBundle:Image  i
          SET i.pictitel= :pictitel 
          WHERE i.userid = :userid and i.id= :imageid')
            ->setParameter('userid', $userid)
            ->setParameter('imageid', $imageid)
            ->setParameter('pictitel', $pictitel)
            ->getResult();
    }
}