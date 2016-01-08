<?php
//This PHP, inserts users to the database. Thus registers users to the website
//#echo "<br><br>Starting MySQL <br><br>";

//Connect to the database
$dbConnection = mysqli_connect('localhost', 'root', ''); //or die(mysqli_error()); 


if (!$dbConnection) {
    die('Could not connect: ' . mysqli_error());}
else{
    mysqli_select_db($dbConnection,'mysitedatabase');



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

        //$userPic = $_POST['userPic'];
        
        $query = "INSERT INTO users VALUES(null,'$Firstname','$Lastname','$Skills',
                '$Profession','$Qualifications','$Province','$City','$email','$password1','','../ased-includes/img/blackSilhouette.jpg')";

        if (!mysqli_query($dbConnection,$query)){

                die('Error: ' . mysqli_error($dbConnection));

        }
        else{
            echo "1 record added";
        }
     
    }
  
 }
 
 mysqli_close($dbConnection);


