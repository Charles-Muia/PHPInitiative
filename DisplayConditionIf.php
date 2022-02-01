<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ForPHP.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

echo "PHP if...else...elseif Statements";
echo "<br>";
echo "****************************************************************************************";
echo "<br>";
echo "Example 1";
echo "<br>";
echo "----------------------------------------------------------------------------------------------------------";
echo "<br>";

$Marks=$_POST ["GiveMarks"] ?? ""; //?? "" is a fallback so that if $Marks isn't an array, set to use empty string instead

if (empty($Marks)) {  //Checks if there is any user input

    echo 'Field Empty: Please Enter Your Marks'; //display the echo if no user input

} elseif ($Marks <=39) {   //1 - 39 echos Referred
    echo "Marks Scored: ($Marks%)";
    echo "<br>";
    echo 'Grade: FAIL';
    echo "<br>";
    echo "<br>";
    echo "Dear Student,";
    echo "<br>";
    echo "<br>";
    echo "You have been Refereed. Please plan to retake your Exams.";

} elseif ($Marks >= 40 and $Marks <= 59) {  // 40 - 59 echos Passed

    echo 'Grade: You have Passed';

} elseif ($Marks >= 60 and $Marks <= 80) { // 60 - 80 echos Credit

    echo 'Grade: You have a Credit';

} elseif ($Marks >= 81 and $Marks <= 100) { // between 81 - 100 echos Distinction

    echo "Marks Scored: ($Marks%)";
    echo "<br>";
    echo 'Grade: DISTINCTION';
    echo "<br>";
    echo "<br>";
    echo "Dear Student,";
    echo "<br>";
    echo "Congratulations: Kuja Sherehe Nyuma Ya Tent.";

} else {

    echo "Out of range"; // Above 100 displays Out of Range
}

?>

</body>
</html>

