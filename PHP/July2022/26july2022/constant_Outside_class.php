<hr> <h2 style="text-align: center;">PHP: class {} const static SimpleClass::a </h2> <hr> 
     <!-- Use outside: SimpleClass::sayHello();
    echo SimpleClass::a; -->

<?php
class SimpleClass
{
    // property declaration
    public $var = 'Hello Simple Class';
    public const a="America";
 
    // Static method declaration
    public static function sayHello() {
        echo "Hello World";
    }
}

SimpleClass::sayHello();
echo SimpleClass::a;
/*
access class method using directly class name and scope resolution Operator ::
 Result: Hello World
*/
?>