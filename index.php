<?php
$name = "Anup";
$_address = "Chitwan";
$Phone = 454545;
$salary = null;
$isStudent = true;
$B50 = "Sam";
$percent = 98.6;

//Concatenation
//echo $name . $_address; 
//echo "{$name},{$_address}";

$Ram = $name; // pass by value
//echo $Ram;

$Ram = &$name; //pass by refrence
$name = "akash";
//echo $Ram;

//var_dump($name,$Phone,$salary); //used to check variable

//die; // doesn't execute further code
//echo "hahahah";

//Operation and operator
$price =50;
$discount =10;
$total = $price-$discount; //assigment operator
//echo $total;

$amount_a = 100;
$amount_b = 20;
//echo $amount_a > $amount_b; 
//echo $amount_a <= $amount_b; //all these 3 lines are greater,lessorequal,greaterorequal operator
//echo $amount_a >= $amount_b;


$a = 55;
$b = 4;
//echo $a%$b; //modulus operator give remainder
//echo $a==$b; //==  equal
//echo $a!=$b; //!=  not equal


//conditional operators
$aa = 20 ;
/*if ($aa/2) {
    echo "Even number";
}
else {
    echo "odd number";
}*/

//Switch

$favcolor = "blue";

/*switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}*/

//FOR loop

/*for ($i=0; $i <=10 ; $i++) {   //init_counter;test_counter;increment_counter
    echo $i;
}*/

//While loop
/*$x = 1;
while($x <= 6) {
    $x++;
  echo "The number is: $x <br>";
  
}*/

//Do While
/*$x = 2;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 6);*/

//Array 
/*$user_one = ["ram","hari","sam"]; //note:index start from 0,1,2
echo $user_one[2];*/ //printing index 

//Asssociative Array
/*$user =[
    "name" => "sam",
    "email" => "sam@sam.com"
];
echo $user["name"];*/

//array inside array (multidimensonal array)
/*$user_detail =[
    [

        "name" => "sita",
        "age" => 25,
        
    ],
    [
        "name" => "gita",
        "age" => 45 
    ]
    ];
    echo $user_detail[0]["address"];//$user_detail[1]["name"];*/

//ForEach Loop
/*$age = [
  "anup" => 22,
  "sandesh" => 23,
  "akash" => 24,
];
foreach($age as $x => $val) {
  echo "$x = $val<br>";
}*/

//Functions
/*function add($a,$b) //fuction with two argument
{
  echo $a+$b;
}
add(10,5);*/  //calling fuction 

/*function check ($a,$b=0) //$b=o is optional argument
{   
  echo $a%$b;
}
check(10,3); */ //10/3 gives rem 1 as $b=0 which is optional argument

/*function check ($a,$b=2) //$b=2 is default argument
{   
  echo $a%$b;
}
check(10);*/ //check 10 gives rem 0 as $b=2 which is default argument

/*function check($a,$b){
  return $a%$b;   //note:inside function block,nothing runs after return statementss

  echo "nothing runs after return ";
}
$value = check(11,2);
echo $value;*/

