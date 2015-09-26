<?php
use Symfony\Component\HttpFoundation\Request as SimfonyRequest;

/**
 *
 * @author milos
 *        
 */
class Request extends SimfonyRequest
{

    /**
     *
     * @return boolean
     */
    public function isAjax ()
    {
        return $this->isXmlHttpRequest();
    }
}