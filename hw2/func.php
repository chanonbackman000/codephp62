<?php

function GPA($score = 56)
{
switch ($score) 
{

    case ($score < 50):
        echo "F";
       break;
    case ($score <55):
        echo "D";
        break;
    case ($score <60):
        echo "D+";
        break;
    case ($score <65):
        echo "C";
        break;
    case ($score <70):
        echo "C+";
        break; 
    case ($score <75):
        echo "B";
        break;   
        
    case ($score < 80):
        echo "B+";
        break;
    default:
        echo "A";
        break;
    }
    echo "<br>";
    return $score;

}
echo "<br>";
echo GPA()

?>