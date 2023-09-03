<?php
$start=1;
$last=100;
echo "Numbers that can be divisible by 3 from <b>$start</b> to <b>$last</b> is ";
do {
    if($start%3==0){
        echo "<b>$start</b>";
        if($start!=$last-1){
            echo ",";
        }
    }
    $start++;
}while($start<=$last);
