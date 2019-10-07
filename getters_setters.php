<?php
    class Person
    {
        private $name;
        private $age;
        public function __construct($name) {
            $this->name = $name;
        }
        public function getAge()
        {
            return $this->age * 365;
        }
        public function setAge($age)
        {
            if ($age <18) {
                throw new Exception("Error Processing Request", 1);
            }
            $this->age = $age;
        }
    }

    $rafael = new Person("Rafael");
    $rafael->setAge(19);
    $rafael->getAge();
    // $rafael->age++; 
     var_dump($rafael->getAge());
?>