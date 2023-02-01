<?php
    require 'dbconnect.php';


    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usn = $_POST['usn'];
        $pass = $_POST['pass'];
        echo $usn." ".$pass;
        
        $que = "SELECT * from users where username='".$usn."' and password='".$pass."'";
        echo "<br>";
        echo $que;
        $result  = mysqli_query( $conn , $que );

        if(mysqli_num_rows($result)==1){
            echo "<br> Logged in";
            
            session_start();
            $_SESSION['usn']=$usn;
            $_SESSION["loggedin"]=true;
            $_SESSION["rightpassword"]=true;
            header("location: ../index.php");
        }
        else{
            session_start();
            $_SESSION['wrongpassword']=true;
            header("location: ../index.php");
        }

    }

?>