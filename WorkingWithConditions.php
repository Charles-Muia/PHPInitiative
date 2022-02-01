<?php

echo "PHP if...else...elseif Statements";
echo "<br>";
echo "****************************************************************************************";
echo "<br>";
echo "Example 1";
echo "<br>";
echo "-----------------------------------------------------------------------------------------";
echo "<br>";

$Marks=2;

if ($Marks<=39) {   //1 - 39 echos Referred

    echo "Marks Scored: ($Marks%)";
    echo "<br>";
    echo 'Grade: FAIL';
    echo "<br>";
    echo "<br>";
    echo "Dear Student,";
    echo "<br>";
    echo "<br>";
    echo "You have been Refereed. Please plan to retake your Exams.";
}
elseif ($Marks>=40 and $Marks<=59){  // 40 - 59 echos Passed


    echo "Marks Scored: ($Marks%)";
    echo "<br>";
    echo 'Grade: PASS';
    echo "<br>";
    echo "<br>";
    echo "Dear Student,";
    echo "<br>";
    echo "<br>";
    echo "You have Passed. Please prepare for the next Academic Trimester.";
}
elseif ($Marks>=60 and $Marks<=80){ // 60 - 80 echos Credit


    echo "Marks Scored: ($Marks%)";
    echo "<br>";
    echo 'Grade: CREDIT';
    echo "<br>";
    echo "<br>";
    echo "Dear Student,";
    echo "<br>";
    echo "<br>";
    echo "You have Passed. Please prepare for the next Academic Trimester.";
}
elseif ($Marks>=81 and $Marks<=100) { // between 81 - 100 echos Distinction

    echo "Marks Scored: ($Marks%)";
    echo "<br>";
    echo 'Grade: DISTINCTION';
    echo "<br>";
    echo "<br>";
    echo "Dear Student,";
    echo "<br>";
    echo "<br>";
    echo "Congratulations, Kuja Sherehe Nyuma Ya Tent";

}

else {

    echo "Out of range"; // Above 100 displays Out of Range
}


