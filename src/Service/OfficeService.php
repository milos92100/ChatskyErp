<?php
use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\Collection;

/**
 *
 * @author milos
 *        
 */
class OfficeService
{

    public static $instance = null;

    /**
     * Returns the class instance.
     *
     * @return UserService
     */
    public static function getInstance ()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     *
     * @param Office $office            
     * @return boolean
     */
    public function Exists (Office $office)
    {
        return $this->getByNumber($office->getNumber());
    }

    /**
     * Checks if a office with the given number exists.
     *
     * @param number $number            
     * @return boolean
     */
    public function getByNumber ($number)
    {
        $criteria = Criteria::create();
        
        $criteria->where(Criteria::expr()->eq('number', $number))
            ->setMaxResults(1);
        
        $result = OfficeRepository::getInstance()->getBy($criteria);
        
        if ($result->count() > 0) {
            return true;
        }
        return false;
    }
}