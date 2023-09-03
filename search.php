<?php
/* 


--->>> Show the difference between switch case and match 


*/
$course="java";

switch($course){
    case"PHP":
        echo"I LOVE PHP IN SWITCH ";
    break;
    case"JAVA":
    case "JAVASCRIPT":
        echo"I LOVE JAVA IN SWITCH ";
    break;
    case"PYTHON":
        echo"I LOVE PYTHON IN SWITCH ";
    break;
}
echo '<br>';
$match= match($course){
    "PHP"=> "I LOVE PHP IN MATCH ",
    "JAVA","JAVASCRIPT"=> "I LOVE JAVA IN MATCH",
    "PYTHON"=> "I LOVE PYTHON IN MATCH",
};
echo $match;