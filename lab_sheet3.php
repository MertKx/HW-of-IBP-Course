<?php  
#This file contains lab_sheet 3 tasks scripted by Cafer Mert Kalay with student number of 2210213302.

print "TASK 1<br>";
# task 1.1
echo "Twinkle, Twinkle little star.<br>";

#tas 1.2
$sentence = "Twinkle";
$sentence1 = "star";

echo "{$sentence}, ".$sentence." little {$sentence1}.<br>"; 

#task 1.3
$sentence = "Run";
$sentence1 = "bear";

echo "{$sentence}, ".$sentence." little {$sentence1}.<br>"; 

print "-----------------------------------------------------<br>";
print "TASK 2<br>";

$x=10; 
$y=7; 

print "$x + $y = ". ($x+$y)."<br>";

print "$x - $y = ". ($x-$y)."<br>";

print "$x * $y = ". ($x*$y)."<br>";

print "$x / $y = ". ($x/$y)."<br>";

print "$x % $y = ". ($x%$y)."<br>";

print "-----------------------------------------------------<br>";
print("TASK 3<br>");

$variable = 8;

print "Value is now $variable.<br>";
$variable +=2;
print "Add 2. Value is now $variable.<br>";
$variable -=4;
print "Subtract 4. Value is now $variable.<br>";
$variable *=5;
print "Multiply by 5. Value is now $variable.<br>";
$variable /=3;
print "Divide by 3. Value is now $variable.<br>";
$variable ++;
print "Increment value by one. Value is now $variable.<br>";
$variable --;
print "Decrement value by one. Value is now $variable.<br>";

print "-----------------------------------------------------<br>";
print("TASK 4 <br>");

$number = 28;
$name = "Harry";
$null = null;

#I searched in web for function "var_dump" for not using print function.  
var_dump($name);
echo "<br>";

print("$name");
echo "<br>";

var_dump($number);
echo "<br>";

var_dump($null);
echo "<br>";

#If I stick to slides

print "<br>string(".strlen($name).') "Harry"<br>';

print "$name<br>";

print "int($number)<br>";

$type = gettype($null);
print $type."<br>";

print "-----------------------------------------------------<br>";
print "TASK 5<br>";

#task 5.1
$variable = "around";
echo 'What goes '.$variable.', comes '.$variable.'.<br>';

#task 5.2
$monthName = date('F',time());

/*if want to see month name:
print "$monthName"; */

if(strcmp($monthName, "August")){
    echo "Not August, so at least not in the peak of the heat.";
}else{
    echo "It's August, so it's really hot.";
}
# Also if($monthName == "August") structure can be used for the solution. I chose this structure because we covered this type in class.

?>