<?php

$start=1;
$last=50;
for($start;$start<=$last;$start++){
   if($start%3==0 && $start %5==0){
        echo  "Number $start  can divid by 3 & 5 is and it will be : ". "<b>FizzBuzz</b>".'<br>';
       echo '<hr>';
    }

    elseif($start%5==0){
        echo  "Number $start  can divid by 5 and it will be :  "."<b>Buzz</b>".'<br>';
        echo '<hr>';

    } elseif($start%3==0){
        echo  " Number $start  can divid by 3 and it will be : "."<b>Fizz</b>".'<br>';
        echo '<hr>';

    }
}
