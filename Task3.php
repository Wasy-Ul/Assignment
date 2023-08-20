<?php

    class Employee{
        private $name,$id,$salary;

        function __construct($name,$id,$salary){
            $this->name=$name;$this->id=$id;$this->salary=$salary;
        }

        function getName(){
            return $this->name;
        }
        function getId(){
            return $this->id;
        }
        function getSalary(){
            return $this->salary;
        }
        function setSalary($salary){
            $this->salary=$salary;
        }
    }

    $obj= new Employee("Biplob Borua",202337,25000);

    echo "The salary of ".$obj->getName() ." is: ".$obj->getSalary()."<br>";

    $obj->setSalary(28000);

?>