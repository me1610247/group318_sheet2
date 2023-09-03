<?php
//task 8 make a calculator

$Num1=10;
$Num2=20;
$operatpr ='*';
$result=0;
if($operatpr=='+'){
    $result = $Num1+$Num2;
}elseif($operatpr=='-'){
    $result=$Num1-$Num2;
}elseif($operatpr=='*'){
    $result=$Num1*$Num2;

}elseif($operatpr=='/'){
    $result=$Num1/$Num2;

}elseif($operatpr=='**'){
    $result=$Num1**$Num2;

}elseif($operatpr=='%'){
    $result=$Num1%$Num2;
}
if($operatpr =='*'||$operatpr=='/'||$operatpr=='%'||$operatpr=='-'||$operatpr=='+'||$operatpr=='**'){

echo "Result of the operation is ". $result;
}else
echo " sorry undefined operator ";
