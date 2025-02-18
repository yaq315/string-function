<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


// task1



function swap(&$x, &$y) {
     $x = $y;
     $y+= 2;

}

$x =12 ;
$y =10 ;
swap($x, $y);
echo "x = $x, y = $y" ;
echo "<hr>";

// task2

function task2($number){
    $num1 = (string)$number;
   // var_dump($num1);
     $nums = str_split($num1);
     //var_dump($nums);
     $sum = 0;
     foreach($nums as $n){
         $sum += pow($n , 3);
     }
     //var_dump($sum);
     if($sum == $number){
         echo "is armstrong number <br>";
     }else{
         echo "is not armstrong number <br>";
     }
 }
 
   $number = 400;
   task2($number);

   echo "<hr>";
// task3

$string="Eva, can I see bees in a cave?";
$remove= preg_replace("/[^a-zA-Z0-9]/", "", $string);
$lowercase= strtolower ($remove);

$reverse = strrev ($lowercase);

if ($lowercase===$reverse){
    echo "Yes, it is a palindrome";
}else{
    echo "No, it is not a palindrome";
}

echo "<hr>";

// task4
function removedupplicate($array1){
   return array_unique($array1);
}

$array1 = [2, 4, 7, 4, 8, 4]; 
$result =  removedupplicate($array1);
echo implode(" " , $result) ;

echo "<hr>";

// task5
$str=" remove ";
echo strrev($str);
echo "<hr>";

// task6
$str=" remove ";
$lower= strtolower($str);
if($str===$lower){
    echo "Your String is Ok ";
}else{
    echo "Your String is not Ok ";
}

echo "<hr>";

// task7
$string="orange coding academy";
$upper=strtoupper($string);
echo "$upper <br>" ;
$lower=strtolower($string);
echo "$lower <br>";
$upperleter=ucfirst($string);
echo "$upperleter <br>";
$upperword=ucwords($string);
echo "$upperword <br>";

echo "<hr>";

// task8

$num='085119';
$hour=substr($num,0,2);
$minutes=substr($num,2,2);
$second=substr($num,4,6);
echo "$hour:$minutes:$second";

echo "<hr>";

// task9

$string="I am a full stack developer at orange coding academy";
$found = strpos($string, "Orange");

if ($found != 0){
    echo "it's found";
}else{
    echo "it's not found";
}

echo "<hr>";

// task 10

$url="www.orange.com/index.php";
$filename=basename($url);
echo $filename;

echo "<hr>";

// task 11

$string1 = 'dragonball';
$string2 = 'dragonboll';

for ($i = 0; $i < min(strlen($string1), strlen($string2)); $i++) {
    if ($string1[$i] !== $string2[$i]) {
        echo "First difference between two strings at position " . ($i + 1) . 
             ': "' . $string1[$i] . '" vs "' . $string2[$i] . '"';
        break;
    }
}

echo "<hr>";

// task12

 $Character='a';
 $next= chr(ord($Character)+1);
 echo  $next;

 echo "<br>";

 $letter='z';
 if ($letter === 'z') {
    $next = 'a';
    echo  $next ;
} elseif ($letter === 'Z') {
    $next = 'A';
    echo  $next;
}
echo "<hr>";
// task13

$num= '0000657022.24';
$remozerro= str_replace('0','',$num);
echo $remozerro;

echo "<hr>";
// task14

$string= '\"\1+2/3*2:2-3/4*3';
$remove= preg_replace("/[^a-zA-Z0-9]/", "", $string);
echo $remove;

echo "<hr>";

// task15

$string= 'The quick brown fox jumps over the lazy dog' ;
$convert= explode(' ',$string);
$word= array_slice($convert,0,5);
$convert1= implode(' ',$word);
echo $convert1;


    ?>
</body>
</html>