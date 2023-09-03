<?php
/**
 * Hello 
 * here i make it dynamic factorial caluclator 
 * if you change $n to any number it will  print the factorial of the number changed 
 * and the strucutre of the factorial number will change also
 * i used (global) to make $n can be seen in the function 
 */
 $n=4; 
$sum = 1; 
echo "The Factorial of $n is ";
function  DecrementNumbers(){
    global $n;
    for($n;$n>=1;$n--){
        echo "<b>$n</b>";
        if($n!=1){
            echo "*";
        }
    }
}
for ($i=1; $i <= $n; $i++) {  
  $sum *= $i;  
} 
echo DecrementNumbers() ." is ". "<b>$sum</b>";  
