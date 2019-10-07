<?php

namespace Acme;

class Busisness
{
    protected $staff;
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }
    public function Hire(Person $person)
    {
        $this->staff->add($person);
    }
    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}

?>