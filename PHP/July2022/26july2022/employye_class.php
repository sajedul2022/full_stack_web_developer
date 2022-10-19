<hr> <h2 style="text-align: center;">PHP: class {}  </h2> <hr> 

<?php
    class Employee {

        private $name;
        private $title;

        public function getName(){
          return $this->name;
        }

        public function setName($x){
            $this->name = $x;
        }

        public function sayHello(){
            $msg = "{$this->name}, Welcome to OOP ";
            echo  $msg;
        }
    }
    
   $obj1 =  new Employee();
   $obj1->setName("Hasan");
   $obj1->sayHello();



   echo "<pre>";

   print_r($obj1);

?>