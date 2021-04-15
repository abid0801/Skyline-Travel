<?php

session_start();

if(isset($_POST['submit'])){
    
    include_once 'connect.php';
    $first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
    $last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
    $passport_number=mysqli_real_escape_string($conn,$_POST['passport_number']);
    $expiration_date=mysqli_real_escape_string($conn,$_POST['expiration_date']);
    $country_id=mysqli_real_escape_string($conn,$_POST['country_id']);

    //check for empty fields
    if(empty($first_name) || empty($last_name) || empty($email) || empty($pwd) || empty($passport_number) || empty($expiration_date) || empty($country_id)){
        header("location: home.php?signup=empty");
            exit();
    }


    else{
        $sql="select * FROM users WHERE passport_number='$passport_number' OR email='$email'";
        $result = mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if($resultCheck==0){
            //INSERT the user in DB
            $sql="INSERT INTO users (first_name, last_name, email, pwd, passport_number, expiration_date, country_id) VALUES('$first_name','$last_name','$email','$pwd','$passport_number','$expiration_date','$country_id');";
            $result=mysqli_query($conn,$sql);
            $_SESSION['email']=$email;
            $_SESSION['first_name']=$first_name;
            $_SESSION['last_name']=$last_name;
            $_SESSION['passport_number']=$passport_number;

            header("location: flights.php");
        }
        
    }
}
   
else{
    header("Location: home.php?signup=failure");
        exit();
}