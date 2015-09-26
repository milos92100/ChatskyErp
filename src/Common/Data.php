<?php
use Doctrine\ORM\EntityManager;

class Data
{

    public static $entityManger = null;

    public static function getEntityManager ()
    {
        return self::$entityManager;
    }

    public static function setEntityManger (EntityManager $entityManager)
    {
        self::$entityManger = $entityManager;
    }
}