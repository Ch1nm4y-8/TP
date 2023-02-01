
<?php

    require '../essential/dbconnect.php';
   session_start();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $rounds = $_POST['rounds'];
        $package = $_POST['package'];
        $project = $_POST['project'];
        $success = $_POST['success'];
        $failure = $_POST['failure'];
        $suggestion = $_POST['suggestion'];
        $comp_id = $_SESSION['comp'];
        unset($_SESSION['comp']);
        // $user = $_SESSION['usn'];

         $query= "INSERT INTO `info` (`no`, `comp_id`, `user_id`, `suggestion`, `no_of_rounds`, `package`, `project`, `success`, `failure`) VALUES (NULL, '".$comp_id."', 'test', '".$suggestion."', '".$rounds."', '".$package."', '".$project."', '".$success."', '".$failure."')";
         mysqli_query( $conn , $query );

         header("location: ./categories.php?id=".$comp_id."");

        

    }   
    


?>


