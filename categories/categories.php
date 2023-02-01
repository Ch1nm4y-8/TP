<?php
    require '../essential/dbconnect.php';
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <link rel="stylesheet" href="./categories.css">

    
    <title>Document</title>
</head>
<body>
 



    <button type="dbutton" class="buttonalla" id="buttonalla">Add ur exprience</button>
    
    <?php

    if($_SERVER['REQUEST_METHOD']=='GET'){
        $id=$_GET['id'];

        
        $query = "SELECT * from `info` where `comp_id`=$id";
        
        $result = mysqli_query($conn , $query);
        while($row = mysqli_fetch_assoc($result)){
            
            $user = $row['user_id'];
            $suggestion = $row['suggestion'];
            $suggestion = substr($suggestion,0,100);

            
            echo '
            <div class="card">
            <p  class="card-footer">Created by <strong>'.$user.'</strong></p>
            <p  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$suggestion.'...</p>
            <a href="../info/info.php?id='.$id.'&uid='.$user.'">Read More -></a>
            
            </div>
            ';
        }
    }
    ?>



    





<?php
session_start();
$_SESSION['comp']=$id;

$query1 = "SELECT * from `companies` where `sno`=$id";
$result1 = mysqli_query($conn , $query1);
while($row1 = mysqli_fetch_assoc($result1)){
    $comp_name = $row1['comp_name'];
}

if(isset($_SESSION['usn'])) {  

echo'
<div class="popup">
        <div class="popup-content">
                <form method="post" action="./categorycopy.php">
                <h2>LET\'S ADD SOME EXPERIENCE </h2>
                <h4 >Company name : <?php echo $comp_name ?></h4>
                <img src="../images/cancel.jpeg" alt="Close" class="close" >
                
                <label for="lname" >No. of Technical round:</label>
                <input type="text" class="user" placeholder="Ex:- 1,2" name="rounds">
                
                <label for="lname" >Package Offered:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="user" placeholder="Ex:- 1,2" name="package">
                
                <label for="lname">Is Project neccessary?:</label>
                <input type="text" class="user" placeholder="Ex:- 1,2" name="project">
                
                <label for="lname">My Success Experience:</label>
                <input type="text" class="user" placeholder="Ex:- 1,2" name="success">
                
                <label for="lname">My Failure Experience:</label>
                <input type="text" class="user" placeholder="Ex:- 1,2" name="failure">
                
                <label for="lname">My Suggestions :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="user" placeholder="Ex:- 1,2" name="suggestion">
                
                
                <input type="submit" class="button" value="Submit">
                </form> 
        </div>
    </div>';
}

else
{
    echo'
    <div class="popup1">
        <div class="popup-content1">
            <h3>You need to login to continue :(</h3>
            <button type="dbutton" class="popupbutton" id="popupbutton" onclick="window.location.href=`../`;">Log in</button>    
        </div>
    </div>
    ';

}
?>







    <script>
        document.getElementById("buttonalla").addEventListener("click", function () {
            document.querySelector(".popup").style.display = "flex";
        })
        document.getElementById("buttonalla").addEventListener("click", function () {
            document.querySelector(".popup1").style.display = "flex";
        })

        document.querySelector(".close").addEventListener("click", function () {
            document.querySelector(".popup").style.display = "none";
        })
    </script>
</body>
</html>