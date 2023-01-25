<?php
    require 'dbconnect.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usn = $_POST['usn'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        if($cpass == $pass){
            echo "Passwords are same.";

            $query = "INSERT into `users` values ('$usn' , '$pass')";
            echo "<br>";
            echo $query;
            $result  = mysqli_query( $conn , $query );

            if($result){

                echo "inserted successfully";
            }
            else{
                echo "could not insert";
            }
        }
        else{
            echo "enter same passwords.";
        }

    }
?>