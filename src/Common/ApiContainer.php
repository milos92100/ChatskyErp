<?php

/**
 *
 * @author milos
 *
 */
class ApiContainer
{

    public $success;

    public $msg;

    public $data;

    function __construct ()
    {
        $this->success = false;
        $this->msg = "Not set";
        $this->data = array();
    }

    /**
     * Encodes this object to json string.
     *
     * @throws ApiJsonException
     * @return string
     */
    public function toJSON ()
    {
        $json = json_encode($this);
        if ($json == null) {
            throw new ApiJsonException("JSON encode failed ( error : " . json_last_error() . " )");
        }
        return $json;
    }

    /**
     * Sets the success property,and returns
     * the object with the set value.
     *
     * @param string $success            
     * @return ApiResponse
     */
    public function setSuccess ($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * Sets the msg property,and returns
     * the object with the set value.
     *
     * @param string $msg            
     * @return ApiResponse
     */
    public function setMsg ($msg)
    {
        $this->msg = $msg;
        return $this;
    }

    /**
     * Sets the data property,and returns
     * the object with the set value.
     *
     * @param array $data            
     * @return ApiResponse
     */
    public function setData ($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Returns the success property
     *
     * @return boolean
     */
    public function getSuccess ()
    {
        return $this->success;
    }

    /**
     * Returns the msg property
     *
     * @return string
     */
    public function getMsg ()
    {
        return $this->msg;
    }

    /**
     * Returns the data property
     *
     * @return array
     */
    public function getData ()
    {
        return $this->data;
    }
}

?>