<?php
$a = 99;
//$a
switch ($a) {
    case 5: ($a >= 80) ;
        echo "Grade A";
       break;
    case ($a >= 75):
        echo "Grade B+";
        break;
    case ($a >= 70) :
        echo "Grade B";
        break;
    case ($a >= 60):
        echo "Grade C";
        break;
    case ($a >= 55):
        echo "Grade D+";
        break;
    case ($a >= 50) :
        echo "Grade D";
        break;
    default:
        echo "Grade F";
        break;
}