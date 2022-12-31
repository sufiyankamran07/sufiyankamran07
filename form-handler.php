<?php
$name = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$emailid = $_POST['EmailID'];
$mobileno = $_POST['MobileNumber'];
$gender = $_POST['Gender'];
$DOB =  $_POST['BirthDay']; $_POST['BirthdayMonth']; $_POST['BirthdayYear'];
$adress =  $_POST['Address'];
$city =  $_POST['City'];
$pincode =  $_POST['PinCode'];
$state =  $_POST['State'];
$country = $_POST['Country'];
$hobbies = $_POST['HobbyDrawin']; $_POST[HobbySinging'']; $_POST['HobbyDancing']; $_POST['HobbyCooking'];$_POST['HobbyOther']; $_POST['Other_Hobby'];
$qualification = $_POST['InSchool']; $_POST['HighSchool']; $_POST['HigherSchool'];
$branch = $_POST['BAHADURPURA'];  $_POST['FALAKNUMA']; $_POST['BANDLAGUDA'];
$courses = $_POST['Appliedcourse'];

$email_from = 'info@yourwebsite';
$email_subject = 'New form submission';
$email_body = "first name" $name.\n".
"LastName" $name.\n".
"EmailID" $name.\n".
"MobileNumber" $name.\n".
"Gender" $name.\n".
"DOB" $name.\n".
"Address" $name.\n".
"City" $name.\n".
"PinCode" $name.\n".
"Country" $name.\n".
"Hobby" $name.\n".
"qualification" $name.\n".
"branch" $name.\n".
"courses" $name.\n".

$to = 'sufiyankaman@gmail.com'
$headers = "from : $emailid \r\n";
$headers = "Reply : $emailid \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");
?>
