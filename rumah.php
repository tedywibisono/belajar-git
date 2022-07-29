<?php 
require "funcsions.php";
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
    exit;
}
$id = $_GET["id"];
$file=[];
$query="SELECT * FROM `gambar` WHERE (id_rumah) IN(VALUES($id))";
$result = $conn2->query($query);



// var_dump($result);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // echo $row["gambar2"]. "<br/>";
        $jumlahrow=count($row);
        
        $file[]=$row;

    }
} 
$sql="SELECT * FROM `rumah` WHERE (id) IN(VALUES($id))";
$Rumah = mysqli_query($conn,$sql);





    

// var_dump($row);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- <section id="navbar2">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
            <form action="" method="post">
            <div class="form-inline input-group sm-2">
                <a class="navbar-brand"> <img src="img/icon.png" alt="" width="25" class="d-inline-block align-text-top mr-1 me-3"><span >Rumah Impian</span></a>

                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" >
                    <button class="button-secundary ml-2" type="button" id="button-addon2" name="cari">Cari</button>
                </div>
            </form>
        </nav>
    </section> -->
    <section id="cekrumah">
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center ">
                <div class="col-6">
                    <div id="carouselExampleIndicators" class="carousel slide mt-4" 
                    data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner "style="margin-left: 100px;">
                        <?php $active = true; ?>
                        <?php for($a=0; $a<$jumlahrow; $a++) {;?>
                            <div class="carousel-item <?php echo ($active == true)?"active":"" ?>"> 
                                <img src="img/<?php echo $file[$a]["gambar2"];?>" width= "340" alt="...">
                            </div>
                        <?php $active = false; ?>
                        <?php } ?>
                        
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span aria-hidden="true"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-chevron-left"></i></button></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span  aria-hidden="true"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-chevron-right"></i></button></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-6 ">
                    <h1>Rumah Modern</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex amet nesciunt corporis debitis dicta inventore dolore laborum accusamus sit, tempore et magni pariatur doloribus aspernatur eos dignissimos sint expedita quaerat.</p>
                    <?php foreach($Rumah as $row): ?>
                        <ul>
                            <li>
                                <p><img src="img/kamar.png" alt=""> : <?php echo $row ["tmpttidur"];?> Kamar tidur</p>
                            </li>
                            <li>
                                <p><img src="img/mandi.png" alt=""> : <?php echo $row ["tmptmandi"];?> Kamar Mandi</p>
                            </li>
                            <li>
                                <p><img src="img/luas.png" alt=""> : <?php echo $row ["luas"];?> M</p>
                            </li>
                        </ul>
                        <button class="button-lg-primary w-100"><p><span>IDR : </span><?php echo $row ["harga"];?></p></button>
                    <?php endforeach; ?>
                   <button class="button-lg-primary w-100 mt-2"><p>Kontak Agen</p></button>

                </div>
                </div>
            </div> 
        </div> 
        
    </section>
       
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>