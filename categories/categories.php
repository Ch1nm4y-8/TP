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
    <?php
        $id=$_GET['id'];
        $query = "SELECT * from `info` where `comp_id`=$id";
        $result = mysqli_query($conn , $query);
        while($row = mysqli_fetch_assoc($result)){
            
            $user = $row['user_id'];
            $suggestion = $row['suggestion'];
            $suggestion = substr($suggestion,0,100);

            
            echo '
            <div class="card">
            <p class="card-footer">Created by <strong>'.$user.'</strong></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$suggestion.'...</p>
            <a href="../glass/glass.php?id='.$id.'&uid='.$user.'">Read More -></a>
            
            </div>
            ';
        }
    ?>

</body>
</html>