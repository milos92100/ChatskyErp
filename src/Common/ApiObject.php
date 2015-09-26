<?php
use Slim\Http\Request;

/**
 *
 * @author Milos Stojanovic
 *        
 *        
 */
abstract class ApiObject implements JsonSerializable
{

    /**
     *
     * @param array $arr            
     */
    function __construct (array $arr)
    {
        foreach ($arr as $prop => $val) {
            if (property_exists($this, $prop)) {
                $ReflectionProperty = new ReflectionProperty(get_class($this), $prop);
                if ($ReflectionProperty->isPublic() || $ReflectionProperty->isProtected()) {
                    $this->$prop = $val;
                }
            }
        }
    }

    /**
     * This method checks if all properties of the object are set.
     * The parameter of the method is $check_id,if the parameter is true the
     * method will check the id.
     * The default value of hte parameter is false.
     * If a propery of the object is bnot set it returns false else it returns
     * true.
     *
     * @param boolean $check_id            
     * @return boolean
     */
    public function verifyPorperties ($check_id = false)
    {
        $vars = get_object_vars($this);
        
        foreach ($vars as $key => $var) {
            if ($key === 'id' && ! $check_id)
                continue;
            
            if ($var === "" || $var == null) {
                return false;
            }
        }
        return true;
    }

    public function jsonSerialize ()
    {
        $arr = array();
        
        $vars = get_object_vars($this);
        foreach ($vars as $key => $var) {
            $arr[$key] = $this->$key;
        }
        
        return $arr;
    }
}