<?php

namespace SOLID\SRP;

class Restaurant
{
    /**
     * @var array
     */
    private $employees = [];
    /**
     * @var int
     */
    private $numberOfTables ;
    /**
     * @var string
     */
    private $owner;
    /**
     * @var array
     */
    private $menu = [];
    public function __construct($owner)
    {
        $this->setOwner($owner);
    }

    /**
     * @return array
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * @param Employee $employee
     * @return void
     */
    public function setEmployees(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    /**
     * @return int
     */
    public function getNumberOfTables()
    {
        return $this->numberOfTables;
    }

    /**
     * @param int $numberOfTables
     */
    public function setNumberOfTables($numberOfTables)
    {
        $this->numberOfTables = $numberOfTables;
    }



    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param Owner $owner
     * @return void
     */
    public function setOwner(Owner $owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return array
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param Item $item
     * @return void
     */
    public function setMenu(Item $item)
    {
        $this->menu[] = $item;
    }




}