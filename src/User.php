<?php

/**
 * @Entity
 * 
 * @Table(name="users",uniqueConstraints={@UniqueConstraint(name="search_idx",
 * columns={"username", "email"})})
 */
class User extends ApiObject
{

    /**
     *
     * @var int @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /**
     *
     * @var string @Column(type="string")
     */
    protected $username;

    /**
     *
     * @var string @Column(type="string")
     */
    protected $password;

    /**
     *
     * @var string @Column(type="string")
     */
    protected $first_name = "";

    /**
     *
     * @var string @Column(type="string")
     */
    protected $middle_name = "";

    /**
     *
     * @var string @Column(type="string")
     */
    protected $last_name = "";

    /**
     *
     * @var string @Column(type="string")
     */
    protected $email = "";

    /**
     *
     * @var string @Column(type="string")
     */
    protected $phone = "";

    /**
     *
     * @var string @Column(type="string")
     */
    protected $mobile = "";

    /**
     *
     * @var string @Column(type="string")
     */
    protected $fax = "";

    /**
     *
     * @var string @Column(type="string")
     */
    protected $country = "";

    /**
     *
     * @var string @Column(type="string")
     */
    protected $city = "";

    /**
     *
     * @var string @Column(type="string")
     */
    protected $address = "";

    /**
     *
     * @var string @Column(type="string")
     */
    protected $zip = "";

    /**
     * Sets the username of the user object.
     *
     * @param string $username            
     */
    public function setUsername ($username)
    {
        $this->username = $username;
    }

    /**
     * Sets the password of the user object.
     *
     * @param string $password            
     */
    public function setPassword ($password)
    {
        $this->password = $password;
    }

    /**
     * Sets the first_name of the user object.
     *
     * @param string $first_name            
     */
    public function setFirstName ($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * Sets the middle_name of the user object.
     *
     * @param string $middle_name            
     */
    public function setMiddleName ($middle_name)
    {
        $this->middle_name = $middle_name;
    }

    /**
     * Sets the last_name of the user object.
     *
     * @param string $last_name            
     */
    public function setLastName ($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * Sets the email of the user object.
     *
     * @param string $email            
     */
    public function setEmail ($email)
    {
        $this->email = $email;
    }

    /**
     * Sets the password of the user object.
     *
     * @param string $password            
     */
    public function setPhone ($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Sets the mobile of the user object.
     *
     * @param string $mobile            
     */
    public function setMobile ($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * Sets the password of the user object.
     *
     * @param string $password            
     */
    public function setFax ($fax)
    {
        $this->fax = $fax;
    }

    /**
     * Sets the country of the user object.
     *
     * @param string $country            
     */
    public function setCountry ($country)
    {
        $this->country = $country;
    }

    /**
     * Sets the city of the user object.
     *
     * @param string $city            
     */
    public function setCity ($city)
    {
        $this->city = $city;
    }

    /**
     * Sets the address of the user object.
     *
     * @param string $address            
     */
    public function setAddress ($address)
    {
        $this->address = $address;
    }

    /**
     * Sets the zip of the user object.
     *
     * @param string $zip            
     */
    public function setZip ($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the id of the user object.
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * Returns the name of the user object.
     */
    public function getUsername ()
    {
        return $this->username;
    }

    /**
     * Returns the password of the user object.
     */
    public function getPassword ()
    {
        return $this->password;
    }

    /**
     * Returns the first_name of the user object.
     */
    public function getFirstName ()
    {
        return $this->first_name;
    }

    /**
     * Returns the password of the user object.
     */
    public function getMiddleName ()
    {
        return $this->middle_name;
    }

    /**
     * Returns the password of the user object.
     */
    public function getLastName ()
    {
        return $this->last_name;
    }

    /**
     * Returns the password of the user object.
     */
    public function getEmail ()
    {
        return $this->email;
    }

    /**
     * Returns the password of the user object.
     */
    public function getPhone ()
    {
        return $this->phone;
    }

    /**
     * Returns the password of the user object.
     */
    public function getMobile ()
    {
        return $this->mobile;
    }

    /**
     * Returns the password of the user object.
     */
    public function getFax ()
    {
        return $this->fax;
    }

    /**
     * Returns the password of the user object.
     */
    public function getCountry ()
    {
        return $this->country;
    }

    /**
     * Returns the password of the user object.
     */
    public function getCity ()
    {
        return $this->city;
    }

    /**
     * Returns the password of the user object.
     */
    public function getAddress ()
    {
        return $this->address;
    }

    /**
     * Returns the password of the user object.
     */
    public function getZip ()
    {
        return $this->zip;
    }

    /**
     * This method updates the current values of the object.
     *
     * @param User $user            
     */
    public function updateValues (User $user)
    {
        $this->id = $user->getId();
        $this->username = $user->getUsername();
        $this->password = $user->getPassword();
        $this->first_name = $user->getFirstName();
        $this->middle_name = $user->getMiddleName();
        $this->last_name = $user->getLastName();
        $this->email = $user->getEmail();
        $this->phone = $user->getPhone();
        $this->mobile = $user->getMobile();
        $this->fax = $user->getFax();
        $this->country = $user->getCountry();
        $this->city = $user->getCity();
        $this->address = $user->getAddress();
        $this->zip = $user->getZip();
    }
}

?>