<?php

class Employee {
    private $name;
    function setName($name) {
    $this->name = $name;
    }
    function getName() {
    return $this->name;
    }
   }
   $emp1 = new Employee();
   $emp1->setName('Anamul');
   $emp2 = clone $emp1;
   $emp2->setName('Sajedul');
   echo "<pre>";

   
   echo "Employee 1 = {$emp1->getName()}\n";
   echo "Employee 2 = {$emp2->getName()}\n";

?>