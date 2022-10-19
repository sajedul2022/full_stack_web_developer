<hr> <h2 style="text-align: center;">PHP: class {} const- use in class   self::a;  </h2> <hr> 


<?php
class SimpleClass
{
    // property declaration
   static public $var = 'Hello Simple Class';
   const a="America";
 
    //  method declaration 
    public function sayHello() {
        echo self::$var; // use self with scope resolution Operator
        echo "<br>", self::a;
    }
}
$obj=new SimpleClass;
$obj->sayHello();
 
?>