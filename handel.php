<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook</title>
    
</head>
<body>
    


<?php
/*
echo '<pre>' ;
echo print_r($_POST);
echo '</pre>';*/
?>
<div class="myclass">
    
    <h3> MY Account Infornmation :</h3>
<?php 
$Fname = $_POST['first-name'];
$Lname = $_POST['last-name'];
$Email = $_POST['email-mobile'];
$Password =$_POST['up-password'];
$Bday = $_POST['birth-day'];
$Bmonth = $_POST['birth-month'];
$Byear = $_POST['birth-year'];
$gen = $_POST['gen'];



echo " MY First Name is " . $Fname . "<br>";
echo " MY Last Name is  " . $Lname . "<br>";
echo " MY E-Mail is " . $Email . "<br>";
echo " MY Password is " . $Password . "<br>";
echo "My Birthday is " . $Bday . "/" . $Bmonth . "/" . $Byear . "<br>";
echo "I'M " . $gen . "<br>" ; 

?>
</div></html></body>