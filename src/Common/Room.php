<?php

class Room extends ApiObject
{

    /**
     *
     * @var integer @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /**
     *
     * @var integer @Column(type="integer")
     */
    protected $number;

    /**
     *
     * @var string @Column(type="string")
     */
    protected $name;

    /**
     *
     * @var string @Column(type="string")
     */
    protected $description;

    /**
     *
     * @var integer @Column(type="integer")
     */
    protected $surface;

    /**
     * Returns the id
     *
     * @return number
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * Sets the id
     *
     * @param number $id            
     */
    public function setId ($id)
    {
        $this->id = $id;
    }

    /**
     * Returns the number
     *
     * @return number
     */
    public function getNumber ()
    {
        return $this->number;
    }

    /**
     * Sets the number
     *
     * @param number $number            
     */
    public function setNumber ($number)
    {
        $this->number = $number;
    }

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName ()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name            
     */
    public function setName ($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the descritpion
     *
     * @return string
     */
    public function getDescription ()
    {
        return $this->descritpion;
    }

    /**
     * Sets the descritpion
     *
     * @param string $descritpion            
     */
    public function setDescription ($descritpion)
    {
        $this->descritpion = $descritpion;
    }

    /**
     * Returns the surface
     *
     * @return number
     */
    public function getSurface ()
    {
        return $this->surface;
    }

    /**
     * Sets the surface
     *
     * @param number $surface            
     */
    public function setSurface ($surface)
    {
        $this->surface = $surface;
    }
}