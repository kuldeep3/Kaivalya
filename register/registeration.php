<?php


 $dbservername = "localhost";
 $dbusername = "phpmyadmin";
 $dbpassword = "localhost";
 $dbname = "kaivalya";
 $conn = mysqli_connect( $dbservername,  $dbusername, $dbpassword,  $dbname );

 $name = mysqli_real_escape_string($conn,$_POST['name']);
 $branch = mysqli_real_escape_string($conn,$_POST['branch']); 
 $gender = mysqli_real_escape_string($conn,$_POST['gender']);
 $events = mysqli_real_escape_string($conn,$_POST['events']);
 $phone = mysqli_real_escape_string($conn,$_POST['phone']);
 $year = mysqli_real_escape_string($conn,$_POST['year']);
 
   $sql = "INSERT INTO registration(name,gender,phone,year,branch,events) VALUES('$name','$gender','$phone','$year','$branch','$events');";
   mysqli_query($conn,$sql);
       
  header("LOCATION: ../index.html?signup=success");


           


 
        
