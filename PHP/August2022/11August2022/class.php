<?php

use Employee as GlobalEmployee;

    class Employee{

        private $name;
        private $title;
        protected $wages;

        public function getName() {
        return $this->name;
        }

        public function setName($name) {
        $this->name = $name;
        }

        public function sayHello() {
        echo "Hi, This name is {$this->getName()}. <br>";
        // echo "Hi, my name is ". $this->getName();
        }

        public function setWages($money){
            $this->wages = $money;
        }

    }

    $obj = new Employee();
    $obj->setName("Sajedul");

    echo "<pre>";
    // print_r($obj);


    // echo $obj->getName();
    $obj->sayHello();

    class Programmer extends Employee {

        public function bonus($percentage){
           $amount =  $this->wages * $percentage / 100 ;

           return "Bonus Amount is = ". $amount;

        }
    }

    $obj1 = new Programmer();
    $obj1->setWages(10000);
    echo $obj1-> bonus(5);



?>