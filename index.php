<?php
/*echo "Assalamualaikum <br>";
 $name = "Ayesha";
 $age = 4;
 echo "This is $name <br>";
 echo "She is $age years old". "<br>"; */

// arithmetic operator
$a= 18;
$b= 5;
echo "for a+b, the result is " . $a+$b . "<br>";
echo "for a-b, the result is " . $a-$b . "<br>";
echo "for a*b, the result is " . $a*$b . "<br>";
echo "for a/b, the result is " . $a/$b . "<br>";
echo "for a%b, the result is " . $a%$b . "<br>";
echo "for a**b, the result is " . $a**$b . "<br>";

// assignment operator
$x=$a;
echo "for x, the value is". $x . "<br>";
$a+=6;
echo "for a=a+6, the value is". $a . "<br>";
$a-=4;
echo "for a=a-4, the value is". $a . "<br>";
$a*=2;
echo "for a=a*2, the value is". $a . "<br>";
$a%=5;
echo "for a=a%5, the value is". $a . "<br>";

// comarison operator
$c=24;
$d=30;
echo "for c==d, the result is " ;
echo var_dump ($c==$d). "<br>";

//logical operator
$m="true";
$n="false";
echo "for m and n, the result is ";
echo var_dump ($m and $n);
echo "<br>";
echo "for m or n, the result is ";
echo var_dump ($m or $n);
echo "<br>";
echo "for !m, the result is ";
echo var_dump (!$m);
echo "<br>";

/* if else condition
$age=24;
if ($age> 25){
    echo "He can drive a car. <br>";
} 
elseif($age> 65){
    echo "He is too weak to drive a car.<br>";
}
else{
    echo " He can not drive a car.<br>";
}*/

// switch case
$age= 30;
switch($age){
    case 8:
        echo "You are are  a little boy";
        break;
    case 18:
        echo "you are a teeneger";
        break;
    case 29:
        echo "you are a young man" ;
        break;
    default:
        echo "you are mature<br>" ;      
}

//while loop
$i=0;
while($i<6){
    echo "the value of i is ";
    echo $i+1;
    $i+=2;
    echo "<br>";}
 
//for loop
for ($index=0; $index <5 ; $index++) { 
    // initialization, condition, updation
    echo "the number is $index <br>";
}

//do while loop
$j=1;
do{
    echo  "$j <br>" ;
    $j++;
}
while($j<4);


//foreach loop
$arr=array("red","green","blue");
foreach ($arr as  $value) {
    echo "$value<br>";
}
?>