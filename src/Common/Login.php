<?php
use Symfony\Component\HttpFoundation\Session\Session;

/**
 *
 * This class handles the user login/logut requests.
 *
 * @author Milos Stojanovic
 * @version 1.0
 *         
 */
class Login
{

    function __construct ()
    {}

    /**
     *
     * @throws InvalidMethodException
     * @throws Exception
     * @return ApiResponse
     */
    public function login ($username, $password)
    {
        if (null == $username || null == $password) {
            throw new Exception("Parameters not set");
        }
        
        $password = sha1($password);
        
        $user = UserService::getInstance()->Login($username, $password);
        
        if ($user == null) {
            throw new Exception("Wrong username or password");
        }
        
        $session = new Session();
        $session->start();
        
        $session->set("user", $user);
        
        return $user;
    }

    /**
     * Logs out the user.
     */
    public function Logout ()
    {
        $session = new Session();
        $session->clear();
        $session->invalidate(0);
    }

    /**
     * If the user is loged in it returns the user else it returns null.
     *
     * @return \Symfony\Component\HttpFoundation\Session\mixed
     */
    public function isLogedIn ()
    {
        $session = new Session();
        
        $user = $session->get("user", null);
        if ($user == null) {
            $session->invalidate(0);
        }
        return $user;
    }
}
?>