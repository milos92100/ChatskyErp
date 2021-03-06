<?php

/**
 * 
 * @author milos
 *
 */
class OfficeController extends ApiController
{

    /**
     *
     * @throws Exception
     * @return ApiContainer
     */
    public function Add ()
    {
        try {
            
            $office = new Office($this->parameters);
            
            error_log(json_encode($office));
            
            if (! $office->verifyPorperties()) {
                throw new Exception("Fill all fields");
            }
            
            if (OfficeService::getInstance()->Exists($office)) {
                throw new Exception("Office with the number " . $office->getNumber() . " exists");
            }
            
            $office = OfficeRepository::getInstance()->add($office);
            
            if (! $office->getId() > 0) {
                throw new Exception("Failed adding a new office.");
            }
            
            $this->container->setMsg("Office successfully added")
                ->setSuccess(true)
                ->setData(array(
                    "office" => $office
            ));
        } catch (Exception $e) {
            $this->container->setMsg($e->getMessage())
                ->setSuccess(false);
        }
        
        return $this->container;
    }

    /**
     *
     * This method removes the given office.
     *
     * @throws Exception
     * @return ApiResponse
     */
    public function Delete ()
    {
        try {
            
            $office = new Office($this->parameters);
            
            if (OfficeRepository::getInstance()->find($office->getId()) == null) {
                throw new Exception("Office with id ( " . $office->getId() . " ) does not exist");
            }
            
            OfficeRepository::getInstance()->remove($office);
            
            $this->container->setMsg("Office successfully removed")
                ->setSuccess(true)
                ->getData(array(
                    "office" => $office
            ));
            ;
        } catch (Exception $e) {
            $this->container->setMsg($e->getMessage())
                ->setSuccess(false);
        }
        
        return $this->container;
    }
}