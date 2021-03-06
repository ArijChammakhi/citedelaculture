<?php

namespace PIDEVBundle\Repository;

/**
 * FavorisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FavorisRepository extends \Doctrine\ORM\EntityRepository
{
    public function Selectmesfavoris($iduser)
    {

        $query = $this->createQueryBuilder('s')

            ->Where('s.idUser=:iduser')

            ->setParameter(':iduser',$iduser);

        return $query->getQuery()->getResult();
    }
    public function TopWorkshop($idworkshop)
    {

        $query = $this->createQueryBuilder('e')
            ->select('COUNT(e.idUser)')
            ->from('PIDEVBundle:Favoris', 's')->where('s.workshop=:idworkshop')
            ->setParameter(':idworkshop',$idworkshop);

        return $query->getQuery()->getSingleScalarResult();
    }
}

