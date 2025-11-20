<?php

$firstname =  $_POST['fname'];
$lastname =  $_POST['lname'];
$Gender =  $_POST['gender'];
$DateOfBirth =  $_POST['dob'];
$StateOfOrigin =  $_POST['state'];
$Qualification =  $_POST['academicQualification'];
$ClassofDegree =  $_POST['classOfDegree'];



if($firstname == '')
 {
     echo 'Please enter your firstname. <a href="index.php">Go back</a>';
     exit;

 }

 if($lastname == '')
 {
     echo 'Please enter your lastname. <a href="index.php">Go back</a>';
     exit;
 }


 if($Gender == '')
 {
     echo 'Please enter your gender. <a href="index.php">Go back</a>';
     exit;
 }
 if($DateOfBirth == '')
 {
     echo 'Please enter your date of birth. <a href="index.php">Go back</a>';
     exit;
 }
 if($StateOfOrigin == '')
 {
     echo 'Please enter your state of origin. <a href="index.php">Go back</a>';
     exit;
 }
 if($Qualification == '')
 {
     echo 'Please enter your qualification. <a href="index.php">Go back</a>';
     exit;
 }
 if($ClassofDegree == '')
 {
     echo 'Please enter your class of degree. <a href="index.php">Go back</a>';
     exit;
 }



$content = "Below are the information that was submitted on the website.\n"
    . "First name: $firstname\n"
    . "Last name: $lastname\n"
    . "Gender: $Gender\n"
    . "Date Of Birth: $DateOfBirth\n"
    . "State Of Origin: $StateOfOrigin\n"
    . "Qualification: $Qualification\n"
    . "Class of Degree: $ClassofDegree\n\n";

 $file = fopen('result.txt', 'a');
 if ($file) {
     fwrite($file, $content);
     fclose($file);
 }


 echo '<h2>Thank you '.$firstname.'</h2>';

 echo '<p>A representative of our company will contact you within the next 24 hours.</p>';

?>