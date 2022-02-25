<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CommentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentRepository extends EntityRepository
{
	/****
	returns the number of entity's rows
	@return int
	*/
	public function count() {
		$query = $this->createQueryBuilder('e')->select('count(e)')->getQuery();
		return $query->getSingleScalarResult();
	}
	public function countByPoster($poster) {
		$query = $this->createQueryBuilder('e')->select('count(e.id)')->where("e.poster = ".$poster)->getQuery();
		return $query->getSingleScalarResult();
	}
	public function countByChannel($channel) {
		$query = $this->createQueryBuilder('e')->select('count(e.id)')->where("e.channel = ".$channel)->getQuery();
		return $query->getSingleScalarResult();
	}
}
