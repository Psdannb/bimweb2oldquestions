<?php
/*
Question:
Write a PHP program to create a registration form with the following requirements.
a. Customer Name (Textbox): required, should be at least 3 characters long
b. Mobile No (Textbox): required
c. Email (Textbox): required
d. Country (Dropdown): required
e. Intrests (Radio): required and should contain at least one 
f. Feedback (Textarea): optional
The form contains a Submit button , which on click, perform server side validation and displays the form data if submitted data is valid and displays the validation error on invalid data.
Solution:
*/
//variables
$name="";
$mobile="";
$email="";
$country="";
$interest="";
$feedback="";

$errors=[];

if($_SERVER["REQUEST_METHOD"]=="POST"){
//    print_r($_POST);
//get the form data
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$country=$_POST['country'];
$interest=$_POST['interest']??"";
$feedback=$_POST['feedback'];

//validate name
if(empty($name)){
    $errors[]="name is required";
}
elseif(strlen($name)<3){
    $errors[]="Name must be at least 3 characters long";
}
//mobile number validate
if(empty($mobile)){
    $errors[]="mobile number is required";
}
// email validate
if(empty($email)){
    $errors[]="Email is required";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors[]="Invalid email address";
}

//country validation
if(empty($country)){
    $errors[]="country  is required";
}
//interest validation
if(empty($interest)){
    $errors[]="interest is required";
}

if(empty($errors)){
    echo "<h1> Registration Details</h2>";
    echo "Customer Name: $name <br>";
    echo "Customer Mobile NO: $mobile<br>";
    echo "Customer Email: $email <br>";
    echo "Customer Country: $country <br>";
    echo "Customer interest: $interest <br>";
    echo "Feedback: $feedback";
}
else{
    echo "<h1> Validation Erros</h2>";
    foreach($errors as $error){
        echo $error;
        echo "<br>";
    }
}


}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Customer Registration Form</title>
</head>

<body>

    <h2>Customer Registration Form</h2>

    <form method="POST" action="">

        Customer Name:
        <input type="text" name="name">
        <br><br>

        Mobile No:
        <input type="text" name="mobile">
        <br><br>

        Email:
        <input type="text" name="email">
        <br><br>

        Country:
        <select name="country">
            <option value="">-- Select Country --</option>
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
        </select>
        <br><br>

        Interests:
        <input type="radio" name="interest" value="Sports"> Sports
        <input type="radio" name="interest" value="Music"> Music
        <input type="radio" name="interest" value="Travel"> Travel
        <input type="radio" name="interest" value="Technology"> Technology
        <br><br>

        Feedback:
        <br>
        <textarea name="feedback" rows="5" cols="40"></textarea>
        <br><br>

        <input type="submit" value="Submit">

    </form>

</body>

</html>