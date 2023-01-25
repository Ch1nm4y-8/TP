<?php
require './essential/dbconnect.php';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedini = True;
}
$loggedini = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>DBMS Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <!-- <div class="div-class">
            <p><input type="text" placeholder="Search" width="30px"></p>
        </div> -->
        <div class="main">
            <div class="logo">
                <img src="logo.jpeg" alt="">
            </div>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>


                <?php
                if(!$loggedini){
                        echo '
                <li><a href="#" class="button5" id="button">LOGIN</a></li>
                <li><a href="#" class="sign5" id="sign">SIGN UP</a></li>
                 ';
               }

               if($loggedini){
                    echo '<li><a href="./essential/logout.php">LOGOUT</a></li>';
                }
                ?>
            
            
            </ul>


            
        </div>
        

    
        <!-- php starts here -->
        <div>
            <?php
                    session_start();
                    if(isset($_SESSION['loggedin'])){
                        if($_SESSION['loggedin']=="true"){
                        
                          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Hi '. $_SESSION['usn'] .' </strong>  You logged in successfully
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                 </div>';
                        }
                        else{
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Incorrect credentials </strong>  You Shouldnt be here!!!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                        }
                    }



            ?>
        </div>
        <!-- php ends here -->
        
        <div class="tp-image">
            <img src="./images/tp-image.png" alt="TP">
        </div>
        <div class="button1">
            <a href="./phase/phase.php" class="btn1">Explore →</a>
        </div>
    </header>

    <div class="popup">
        <div class="popup-content">
            <form method="post" action="./essential/login.php">
            <h1>LOG IN </h1>
            <img src="./images/cancel.jpeg" alt="Close" class="close" >
            <input type="text" class="user" placeholder="Username" name="usn">
            <input type="password" class="password" placeholder="Password" name="pass">

            <input type="submit" class="button" value="Log in">
            </form>
        </div>
    </div>
    <div class="popup1">
        <div class="popup-content1">
            <form method="post" action="./essential/signup.php">
            <h1>SIGN UP</h1>
            <img src="./images/cancel.jpeg" alt="Close" class="close1">
            <input type="text" class="user" placeholder="Username" name="usn">
            <input type="password" class="password" placeholder="Password" name="pass">
            <input type="password" class="re-password" placeholder="Reenter Password" name="cpass">
            <!-- <a href="#" class="sign">SIGNUP</a> -->
            <input type="submit" class="button" value="Sign up">
            </form>
        </div>
    </div>
    <script>
        document.getElementById("button").addEventListener("click", function () {
            document.querySelector(".popup").style.display = "flex";
        })
        document.querySelector(".close").addEventListener("click", function () {
            document.querySelector(".popup").style.display = "none";
        })
        document.getElementById("sign").addEventListener("click", function () {
            document.querySelector(".popup1").style.display = "flex";
        })
        document.querySelector(".close1").addEventListener("click", function () {
            document.querySelector(".popup1").style.display = "none";
        })
    </script>
</body>

</html>