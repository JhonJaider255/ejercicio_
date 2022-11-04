<?php
$firstName = "will";
$lastName =  "smith";

$name = $firstName.' '. $lastName;

echo $name ."<br/>";

echo $name[1];
echo "<br/>";
//heredoc
$x =1;
$y = 2;

$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3 
TEXT;

echo  nl2br ($text);
echo "<br/>";
// Nowdoc
$text = <<< "TEXT"
Line 1 
Line 2 
Line 3 " "
TEXT;

echo "<br/>";
echo  nl2br ($text);






