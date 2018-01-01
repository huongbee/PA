<?php

class A{
    public static $a;
    function __construct(){
        if(!self::$a){
            self::$a = $this;
            echo "Recent create";
        }
        else{
            echo "Created"   ; 
        }
        return self::$a;
    } 
}

$a = new A; //Recent create
$a = new A; //Created
$c = new A; //Created


class UserFactory
{
    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new UserFactory();
        }
        return $inst;
    }

}

$a = UserFactory::Instance();
$b = UserFactory::Instance();
var_dump($a);
var_dump($b);

$c = new UserFactory();
var_dump($c);

if($a===$b) echo "bằng nhau";
else echo "Khác nhau";

if($a===$c) echo "bằng nhau";
else echo "Khác nhau";
?>