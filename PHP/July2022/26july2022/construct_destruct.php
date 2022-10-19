<hr> <h2 style="text-align: center;">PHP: construct destruct  </h2> <hr> 


<?php
    class oop {
        private $name;
        public function __construct ($x){
            $this->name = $x;
            echo $this->name.  " Yes, I am here. <br>";
        }

        public function sayHello(){
            echo "Hello World <br>";
        }

        public function __destruct(){
            echo "Say bye bye!";
        }
    }

   $ob =  new oop("Sajedul");

   $ob->sayHello();
 
?>