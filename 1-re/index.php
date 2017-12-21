<?php
$str = "90 Le Thi Rieng";
/**
 * \w
 * \w+
 * \W
 * \W+
 * \s 
 * .
 * \S
 * \d{1,3}
 * \D
 * Le\s\w+\s
 * 
 */

 $str2 = "$100.000";
 /**
  * \$
  * \.
  * \d?
  * \$\d+\.
  * \000?
  * \000*
  * 000$
  * 
  */

$str3 = "Learning PHP Advance";
/**
 * (Learning|Learn|Learner)\s\w*\s
 * Learn(ing|er){2,4}\s\w+\s
 */


 $str4 = "huongnguyenak96@gmail.com";
 /**
  * [a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}
  * [a-zA-Z0-9._-]{3,50}\@[a-zA-Z0-9]{3,20}\.[a-zA-Z]{2,}
  */

$str5 = "https://www.facebook.com";
if(preg_match('/^http(s){0,1}\:\/\/[w+]{3}\.[a-zA-Z]{3,}\.[a-zA-Z]{2,}$/',$str5)){
    echo "match";
}
else echo "don't match";

?>