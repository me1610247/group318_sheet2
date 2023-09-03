<?php
$start=1;
$last=15;
echo "Odd numbers from $start to $last is ";
while($start<=$last){
    if($start%2!=0){
        echo "<b>$start</b>";
        if($start!=$last){
            echo ",";
        }
    }
    $start++;    
}

