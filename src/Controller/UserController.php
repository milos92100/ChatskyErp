<?php

/**
 *
 * @author Milos Stojanovic
 *        
 */
class UserController extends ApiController
{

    /**
     *
     * @throws Exception
     * @return ApiContainer
     */
    public function Add ()
    {
        try {
            
            $user = new User($this->parameters);
            
            if (! $user->verifyPorperties()) {
                throw new Exception("Fill all fields");
            }
            
            if (UserService::getInstance()->Exists($user)) {
                throw new Exception("User with the username ( " . $user->getUsername() . ") and email (" . $user->getEmail() . ") exists");
            }
            
            $user->setPassword(sha1($user->getPassword()));
            
            $user = UserRepository::getInstance()->add($user);
            
            if (! $user->getId() > 0) {
                throw new Exception("Failed adding a new user.");
            }
            
            $this->container->setMsg("User successfully added")
                ->setSuccess(true)
                ->setData(array(
                    "user" => $user
            ));
        } catch (Exception $e) {
            $this->container->setMsg($e->getMessage())
                ->setSuccess(false);
        }
        
        return $this->container;
    }

    /**
     * Updates the given user
     *
     * @throws Exception
     * @return ApiResponse
     */
    public function Update ()
    {
        try {
            
            $user = new User($this->parameters);
            
            if (! $user->verifyPorperties(true)) {
                throw new Exception("Fill all fields");
            }
            
            if (UserRepository::getInstance()->getById($user->getId()) == null) {
                throw new Exception("User with id ( " . $user->getId() . " ) does not exist");
            }
            
            UserRepository::getInstance()->update($user);
            
            $this->container->setMsg("User successfully updated")
                ->setSuccess(true)
                ->getData(array(
                    "user" => $user
            ));
        } catch (Exception $e) {
            $this->container->setMsg($e->getMessage())
                ->setSuccess(false);
        }
        
        return $this->container;
    }

    /**
     *
     * This method removes the given user.
     *
     * @throws Exception
     * @return ApiResponse
     */
    public function Delete ()
    {
        try {
            
            $user = new User($this->parameters);
            
            if (UserRepository::getInstance()->getById($user->getId()) == null) {
                throw new Exception("User with id ( " . $user->getId() . " ) does not exist");
            }
            
            UserRepository::getInstance()->remove($user);
            
            $this->container->setMsg("User successfully removed")
                ->setSuccess(true)
                ->getData(array(
                    "user" => $user
            ));
            ;
        } catch (Exception $e) {
            $this->container->setMsg($e->getMessage())
                ->setSuccess(false);
        }
        
        return $this->container;
    }

    /**
     * This method initializes the login of the user.
     *
     * @return ApiResponse
     */
    public function Login ()
    {
        try {
            
            $login = new Login();
            
            $username = $this->request->request->get('username', null);
            $password = $this->request->request->get('password', null);
            
            $user = $login->login($username, $password);
            
            $this->container->setMsg("Login successfull")
                ->setSuccess(true)
                ->setData(
                    array(
                            "user" => $user,
                            "path" => "view/private/admin.php"
                    ));
        } catch (Exception $e) {
            $this->container->setMsg($e->getMessage())
                ->setSuccess(false);
        }
        
        return $this->container;
    }

    /**
     * This method initalizes the lgout of the user.
     */
    public function Logout ()
    {
        $login = new Login();
        
        $login->Logout();
    }

    /**
     * This method retursn ther loged in user .
     */
    public function GetLogedInUser ()
    {
        try {
            
            $login = new Login();
            $user = $login->isLogedIn();
            
            $this->container->setMsg("User recived")
                ->setSuccess(true)
                ->setData(array(
                    "user" => $user
            ));
        } catch (Exception $e) {
            $this->container->setMsg($e->getMessage())
                ->setSuccess(false);
        }
        
        return $this->container;
    }

    /**
     * This method returns a User object for the given id.
     *
     * @throws Exception
     * @return ApiResponse
     */
    public function getById ()
    {
        try {
            
            $id = $this->request->request->get('user_id', '0');
            
            $user = UserRepository::getInstance()->getById($id);
            
            if ($user == null) {
                throw new Exception("User with id ( " . $id . " )  not found");
            }
            
            $this->container->setMsg("User found")
                ->setSuccess(true)
                ->setData(array(
                    "user" => $user
            ));
        } catch (Exception $e) {
            $this->container->setMsg($e->getMessage())
                ->setSuccess(false);
        }
        
        return $this->container;
    }
}

?>
    