<?php



$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email =    $_POST['email'];

$errors = [
     'firstNameError' => '',
     'lastNameError' => '',
     'emailError' => '',
];

if (isset( $_POST['submit'])){

    
    //تحقق الاسم الاول
    if(empty($firstName)){
        $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
    }
    //تحقق الاسم الاخير
    if(empty($lastName)){
        $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير';
    }
    //تحقق الايميل 
    if(empty($email)){
        $errors['emailError'] = 'يرجى ادخال الايميل';
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'يرجى ادخال الايميل بشكل صحيح';
    }

    //تحقق لايوجد اخطاء
    if(!array_filter($errors)){
       

    $firstName =  mysqli_real_escape_string($com, $_POST['firstName']);
    $lastName =   mysqli_real_escape_string($com, $_POST['lastName']);
    $email =      mysqli_real_escape_string($com, $_POST['email']);

    $sql = "INSERT INTO users1(firstName , lastName , email)
    VALUES ('$firstName','$lastName','$email')";

    if(mysqli_query($com,$sql)){
    header('Location :  ' .  $_SERVER['PHP_SELF']);
        }else{
    echo 'Error : ' . mysqli_error($com);
    }

    $firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email =    $_POST['email'];

    }

}






?>