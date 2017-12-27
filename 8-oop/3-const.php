<?php

class Student{
    public $name;
    public $age;

    const AGE = 18;

    function setAge($age){
        return $this->age = $age;
    }
    function setName($name){
        if($this->age < self::AGE){
            echo  "Can't access";
        }
        else{
            $this->name = $name;
        }
    }
}

$hs = new Student;
$hs->setAge(9);
$hs->setName('Huong');
echo $hs->name;
?>