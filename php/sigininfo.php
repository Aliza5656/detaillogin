<?php

if(isset($_POST['Rbtnregister'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = base64_encode($_POST['password']);
    $option = $_POST['selection'];
    $gender = $_POST['gender'];

    $query = " INSERT INTO `sigin`( `name`, `email`, `phone`, `password`, `Option`, `Gender`, `role`)  VALUES ('$name','$email','$phone', '$password','$option','$gender' , 'user')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script> alert('Registration Successfull') </script>";
        header("location:login.php");
        }
         else {
            echo "<script> alert('Registration Failed') </script>";
            }

        }
        