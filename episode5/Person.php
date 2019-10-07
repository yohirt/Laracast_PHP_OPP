<?php
class Person
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}
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
class Staff
{
    protected $members = [];
    public function __construct($members =[]){
        $this->members =$members;
    }
    public function add(Person $person)
    {
        $this->members[] = $person;
    }
    public function members()
    {
        return $this->members;
    }
}
$rafael = new Person("Rafallo");
$staff = new Staff([$rafael]);
$erte = new Busisness($staff);
$erte->Hire(new Person("Jane"));
$staff->add(new Person("Leoneora"));
// var_dump($staff);

var_dump($erte->getStaffMembers());