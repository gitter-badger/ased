<?php

//Connect to the database
require_once("../ased-includes/connect.php");

    if(isset($_POST['firstname']) ){                         //If the webpage sent a Post request
        $Firstname = $_POST['firstname'];
        $Lastname = $_POST['lastname'];
        $Skills = $_POST['skills'];
        $Profession = $_POST['profession'];

        $Qualifications = $_POST['qualifications'];
        $Province = $_POST['Province'];
        $City = $_POST['City'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        
        $query = "INSERT INTO users VALUES(null,'$Firstname','$Lastname','$Skills',
                '$Profession','$Qualifications','$Province','$City','$email','$password1','','../ased-includes/img/blackSilhouette.jpg')";

        if (!mysqli_query($dbConnection,$query)){

                die('Error: ' . mysqli_error($dbConnection));

        }
        else{
            echo "1 record added";
        }
     
    }
  
 mysqli_close($dbConnection);


