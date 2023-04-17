<?php
// Comparisons operators

$x = 1;
$y = "1";

if($x === $y)
{
    echo "X is equal to Y";   
}
else{
    echo "X is not equal to Y. ";
}

//arrays

$programmingLanguages = array("PHP","Java","Python","GO","Swift","Kotlin","C programming","C#","C++");
// echo $programmingLanguages[4];
echo "My favourite programming language is: ".$programmingLanguages[1];
echo " .The total number of programming language are: ".count($programmingLanguages); 

?>