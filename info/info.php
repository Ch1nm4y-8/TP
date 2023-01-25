<?php
    require '../essential/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./info.css">
    
    <title>Document</title>
</head>
<body>
    <?php
        $uid=$_GET['uid'];
        $id=$_GET['id'];

        $query = "SELECT * from `info` where `comp_id`=$id and `user_id`='$uid'";
        $result = mysqli_query($conn , $query);
        while($row = mysqli_fetch_assoc($result)){
            $comp = $row['comp_id'];

            //to find company name
            $que = "SELECT * from `companies` where `sno`=$comp";
            $res = mysqli_query($conn , $que);
            $some = mysqli_fetch_assoc($res);
            $comp=$some['comp_name'];

            $round = $row['no_of_rounds'];
            $package = $row['package'];
            $project = $row['project'];
            $success = $row['success'];
            $failure = $row['failure'];
            $suggestion = $row['suggestion'];

        echo '
            <div class="card">
            <h1>created by <strong>'.$uid.'</strong> </h1>
            <p><strong>1. Company name</strong> = '.$comp.'</p>
            <p><strong>2. No of Technical Rounds</strong> = '.$round.'</p>
            <p><strong>3. Package Offered</strong> = '.$package.'</p>
            <p><strong>4. Is Project Neccessary? =</strong> = '.$project.'</p>
            <p><strong>5. My Success Experience </strong>: '.$success.'</p> 
            <p><strong>6. My Failure Experience </strong>: '.$failure.'</p> 
            <p><strong>7. My Suggestions </strong>: '.$suggestion.'</p> 
            </div>
        ';
        }
    ?>

</body>
</html>


<!-- <p class="card-footer">Created by Rahul C.</p> -->