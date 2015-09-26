<?php

/**
 * @Entity
 *
 * @Table(name="inventory",uniqueConstraints={@UniqueConstraint(name="search_idx",
 * columns={"serial"})})
 */
class Inventory extends ApiObject implements JsonSerializable
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
    protected $serial;

    /**
     *
     * @var string @Column(type="string")
     */
    protected $name;

    /**
     *
     * @var string @Column(type="integer")
     */
    protected $qunt;

    /**
     *
     * Sets the id
     *
     * @param number $id            
     */
    public function setId ($id)
    {
        $this->id = $id;
    }

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
     *
     * Sets the serial
     *
     * @param string $serial            
     */
    public function setSerial ($serial)
    {
        $this->serial = $serial;
    }

    /**
     * Returns the serial
     *
     * @return number
     */
    public function getSerial ()
    {
        return $this->serial;
    }

    /**
     * Sets the name
     */
    public function setName ($name)
    {
        $this->name = $name;
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
     * Sets the description
     *
     * @param string $description            
     */
    public function setDescription ($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription ()
    {
        return $this->description;
    }
}