<?php

namespace SOLID\SRP;

class Restaurant
{
    /**
     * @var Employee[]
     */
    private $employees;
    /**
     * @var int
     */
    private $numberOfTables ;
    /**
     * @var string
     */
    private $owner;
    /**
     * @var Item[]
     */
    private $menu ;
    public function __construct($owner)
    {
        $this->setOwner($owner);
    }

    /**
     * @return array
     */

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

    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function setEmployees(array  $employees): void
    {
            foreach ($employees as $employee) {
        if (!($employee instanceof Employee)) {
            throw new \InvalidArgumentException('All elements in the array must be of type Employee.');
        }
        }

        $this->employees[]= $employees;
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
     * @param array
     * @return void
     */
    public function setMenu(array $item)
    {
        foreach ($item as $i) {
            if (!($i instanceof Item)) {
                throw new \InvalidArgumentException('All elements in the array must be of type Employee.');
            }
        }

        $this->menu[]= $item;
    }




}