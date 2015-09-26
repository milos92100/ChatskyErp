<?php
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class OfficeRepository extends EntityRepository
{

    const Entity = "Office";

    /**
     *
     * @var OfficeRepository
     */
    public static $instance = null;

    function __construct ()
    {
        parent::__construct(Data::$entityManger, new ClassMetadata(self::Entity));
    }

    /**
     * Returns the class instance.
     *
     * @return OfficeRepository
     */
    public static function getInstance ()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Returns a Collection of users for the given Criteria object.
     *
     * @param Criteria $criteria            
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBy (Doctrine\Common\Collections\Criteria $criteria)
    {
        return $this->matching($criteria);
    }

    /**
     * This method inserts the given office in the db.
     * If the id is set the insert was successfull.
     *
     * @param Office $office            
     * @return Office
     */
    public function add (Office $office)
    {
        $this->getEntityManager()->persist($office);
        $this->getEntityManager()->flush();
        return $office;
    }
}