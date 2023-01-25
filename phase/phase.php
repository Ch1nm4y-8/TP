<?php
    require '../essential/dbconnect.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" href="../index.css">

    <title>Phase1</title>
</head>
<body>
    <div>
    <div class="row">
    <div class="size">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../carousel_images/11.jpg" class="d-block w-100 " alt="..." width="700" height="500">
            </div>
            <div class="carousel-item">
                <img src="../carousel_images/22.jpg" class="d-block w-100 " alt="..." width="700" height="500">
            </div>
            <div class="carousel-item">
                <img src="../carousel_images/33.jpg" class="d-block w-100 " alt="..." width="700" height="500">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div> 
    </div>
    </div>
</div>
    

    <div class="container my-5">
        <div class="row my-4 mx-0"> 
            
            <?php
                $query = "SELECT * from `companies`";
                $result = mysqli_query($conn , $query);
                while($row = mysqli_fetch_assoc($result)){
            
                $no = $row['sno'];
                $name = $row['comp_name'];
                $desc = $row['description'];
                $desc = substr($desc,0,50);
                    echo '<div class="col-4 my-2 mx-0">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../images/companies/'.$no.'.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">'.$name.'</h5>
                                <p class="card-text">'.$desc.'.....</p>
                                <a href="../categories/glass.php?id='.$no.'" class="btn btn-primary">Show more..</a>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>
</body>
</html>