<?php
// Vince Regnar A. Bibat
// BSIT-4

// 1. PHP variable
$vee = 'vince bibat';
$pee = 19;
$bee = "Male";



// 2. PHP Echo
echo "Name: ". $vee;
echo "<br>";
echo "Age: ". $pee;
echo "<br>";
echo "Sex: ". $bee ;
echo "<br>";
echo "<br>";

// 3. PHP data types
$int = 10;
$float = 89.2;
$string = "Charlatan";
$boolean = true;

echo "this is integer = ". $int;
echo "<br>";
echo "this is float = ". $float;
echo "<br>";
echo "this is string = ". $string;
echo "<br>"; 
echo "this is boolean = ". $boolean;

// 4. PHP string
echo "<br>";
echo "<br>";
echo str_word_count("THE WORD OF JESUS");



// 5. PHP numbers
echo "<br>"; 
echo "<br>";    
var_dump($int);




// 6. Math
echo "<br>"; 
echo "<br>"; 
echo "Square root of 65 is ". (sqrt (65));
echo "<br>"; 
echo "Pie ". (pi(21));

// 7. PHP Constans
echo "<br>";
define("Penis", "Penis");
echo "My ". Penis. "  is big haha";

// 8 PHP Operators
echo "<br>";
echo "<br>";
echo 19 + 19;
echo "<br>";
echo 19 - 19;
echo "<br>";
echo 19 * 19;
echo "<br>";
echo 19 / 19;
echo "<br>";
echo 19 % 19;

//9. if..else..if
echo "<br>";
echo "<br>";
$input1 = "Mayonis";
$input2 = "pinat bater";

if ($input1 == "Mayonis"){
    echo "No problem";
}
elseif($input2 == "pinat bater") {
    echo "hello";
}
else{
    echo "There is a problem";
}



// 10. PHP switch
echo "<br>";
echo "<br>";
$wee = "c";
switch ($wee){
    case 'a':
        echo "Kawasaki";
        break;

    case 'b':
        echo "Honda";
        break;

    case 'c':
        echo "Yamaha";
        break;

    default:
        echo "Brand unknown";
    
    break;
}

// 11. PHP Loops
echo "<br>";
echo "<br>";
for ($v=1; $v<=100; $v++){
    echo $v;
}

// 12. PHP Functions
echo "<br>";
echo "<br>";
function DaddyPie($int) {
    echo $int + 2;
}

DaddyPie(50);

?>






