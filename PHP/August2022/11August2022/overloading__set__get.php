<?php

    class Employee{
        public $name;
        function __set($propName, $propValue)
        {
        $this->$propName = $propValue;
        }
    }

    $employee = new Employee();
    $employee->name = "Sajedul";
    $employee->title = "Executive Chef";
    $employee->address = "Motijeel";

    echo "Name: {$employee->name} <br>";
    echo "Title: {$employee->title} <br>";
    echo "Address: {$employee->address} <br>";



?>