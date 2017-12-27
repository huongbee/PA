<?php

class Student{
    public $name;
    public $age;

    const AGE = 18;

    function setAge($age){
        return [self::AGE => $age];
    }
    function setName($name){
        if($this->age < self::AGE){
            echo  "You are not yet enough ".$this::AGE." age";
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
echo "<br>";
echo $hs::AGE;
echo "<br>";
echo Student::AGE;
?>