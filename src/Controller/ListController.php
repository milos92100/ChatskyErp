<?php

class ListController extends ApiController
{

    /**
     * This method returns all rows of the given entity.
     *
     * @param string $enity            
     * @return array
     */
    public function GetList ()
    {
        try {
            
            $entity = $this->request->request->get('entity', null);
            if ($entity == null) {
                throw new Exception("Entity not defined");
            }
            
            $service = $entity . "Service";
            
            $rows = $service::getInstance()->getAll();
            
            $this->container->setSuccess(true)
                ->setMsg("Data successflully recived")
                ->setData(array(
                    "rows" => $rows
            ));
        } catch (Exception $e) {
            $this->container->setSuccess(false)->setMsg($e->getMessage());
        }
        
        return $this->container;
    }
}
