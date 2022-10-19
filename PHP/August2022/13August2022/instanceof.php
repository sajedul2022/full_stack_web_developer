<?php

class Teacher{

    public $name;
    public $age;
    public $wage;

    function teach(){

    }

    function assignment(){

    }

}

class Students{
    
}

$st = new Students;

if($st instanceof Students){
    echo "Yes";
}else{
    echo "No";
}
echo "<br>";

echo class_exists("Teacher"); //  class_exists()
echo "<br>";

echo get_class($st); // get_class()
echo "<br>";

$method = get_class_methods("Teacher"); // get_class_methods

echo "<pre>";

print_r($method);

$vars =  get_class_vars("Teacher"); // get_class_vars

print_r($vars);


?>