<?php

require 'vendor/autoload.php';
$test = new \Acme\Person();
$rafael = new Acme\Person("Rafallo");
$staff = new Acme\Staff([$rafael]);
$erte = new Acme\Busisness($staff);
$erte->Hire(new Acme\Person("Jane"));
$staff->add(new Acme\Person("Leoneora"));

var_dump($erte->getStaffMembers());
