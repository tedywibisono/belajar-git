<?php 
require "funcsions.php";
session_start();
$Rumah = mysqli_query($conn,"SELECT * FROM rumah");
if (isset($_POST["cari"])){
    $Rumah= cari($_POST["keyword"]);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <!-- link css -->
    <link rel="stylesheet" href="style.css">

    <!-- logo title -->
    <link rel="icon" href="img/icon.png" type='image/x-icon'>


    <title>Rumah impian</title>

  </head>
  <body>
    <section id="navbarlayanan">

            <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/icon.png" alt="" width="30" class="d-inline-block align-text-top me-3">Rumah Impian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav1">
                 <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="Home.php">BRANDA</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link " href="beli.php">PROPERTI</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="home.php">LAYANAN</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">KONTAK</a>
                        </li>
                    </ul>
                    <div>
                    <?php 
                        if(!isset($_SESSION['id'])){
                            echo"<button class='button-primary'><a href='register.php'>Daftar</a></button>";
                            echo"<button class='button-secundary'><a href='login.php'>Masuk</a></button>";
                            }else{
                            echo"
                            <div class=' input-group'>
                            <button class=' button-secundary dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>Profil</button>
                            <ul class='dropdown-menu'>
                              <li><a class='dropdown-item' href='Aploud.php'>Aploud</a></li>
                              <li><a class='dropdown-item' href='logout.php'>Logout</a></li>
                              <li><hr class='dropdown-divider'></li>
                              <li><a class='dropdown-item' href='#'>Separated link</a></li>
                            </ul>
                          </div>";
                            } 

                    ?>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <!-- search -->

    <section id="search"class="d-flex align-item-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5 pt-2">
                    <h2>Temukan Rumah impianmu</h2>
                    <p>sekarang anda dapat menghemat semua hal stres, waktu dan biaya tersembunyi, dengan ratusan rumah untuk anda</p>
                </div>
            </div>
            <div class="col-10 mx-auto mt-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#jual" type="button" role="tab" aria-controls="home" aria-selected="true">Jual</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#sewa" type="button" role="tab" aria-controls="profile" aria-selected="false">Sewa</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="home-tab">
                        <form action="" method="post">
                            <div class="input-group input-cari mb-3">
                            <!-- dropdown tipe rumah -->
                                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="img/homeicon.png" alt=""> Tipe rumah</button>
                                <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Rumah Sederhana</a></li>
                                        <li><a class="dropdown-item" href="#">Rumah Menengah</a></li>
                                        <li><a class="dropdown-item" href="#">Rumah Mewah</a></li>
                                </ul>
                                <!-- dropdown range harga -->
                                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="img/iconduit.png" alt=""> Range Harga</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" name="range">100 Jt - 400 Jt</a></li>
                                    <li><a class="dropdown-item" href="#">400 Jt - 600 Jt</a></li>
                                    <li><a class="dropdown-item" href="#">600 Jt - 900 Jt</a></li>
                                </ul>
                                <input type="text" name="keyword" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari bedasarkan lokasi, id, property">
                                <button name="cari" class="button-primary" type="submit" id="button-addon2" >Cari</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="sewa" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="" method="post">
                            <div class="input-group input-cari mb-3">
                            <!-- dropdown tipe rumah -->
                                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="img/homeicon.png" alt=""> Tipe rumah</button>
                                <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Rumah Sederhana</a></li>
                                        <li><a class="dropdown-item" href="#">Rumah Menengah</a></li>
                                        <li><a class="dropdown-item" href="#">Rumah Mewah</a></li>
                                </ul>
                                <!-- dropdown range harga -->
                                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="img/iconduit.png" alt=""> Range Harga</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">100 Jt - 400 Jt</a></li>
                                    <li><a class="dropdown-item" href="#">400 Jt - 600 Jt</a></li>
                                    <li><a class="dropdown-item" href="#">600 Jt - 900 Jt</a></li>
                                </ul>
                                <input type="text" name="keyword" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari bedasarkan lokasi, id, property">
                                <button name="cari" class="button-primary" type="submit" id="button-addon2" >Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>     
        </div>
    </section>
    
    <section id="rekomendasi">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center mt-5">
                    <H2>Rekomendasi Rumah untukmu</H2>
                </div>
            </div>
                <div class="row">
                 <?php foreach($Rumah as $row): ?>
                        <div class="col-4">
                            <div class="card p-2 mb-3 " style="width: 22rem;">
                                <img src="img/<?php echo $row ["gambar"];?>"width="335.23px" height="249.74px" alt="">
                                <div class="card-body">
                                    <h4>IDR <?php echo $row ["harga"];?></h4>
                                    <p class="mb-4 lh-sm"><?php echo $row ["alamat"];?> <br> <span class="text-danger"><?php echo $row ["status"];?></span> <br><a href="rumah.php?id=<?php echo $row ["id"];?>">Lihat</a></p>
                                </div>
                                <div class="card-fasilitas d-flex justify-content-between px-4 ">
                                    <span>
                                        <img src="img/kamar.png" alt=""><?php echo $row ["tmpttidur"];?>
                                        <p>Kamar tidur</p>
                                    </span>
                                    <span>
                                        <img src="img/mandi.png" alt=""><?php echo $row ["tmptmandi"];?>
                                        <p>Kamar mandi</p>
                                    </span>
                                    <span>
                                        <img src="img/luas.png" alt="" class=""><?php echo $row ["luas"];?>
                                        <p>Luas rumah</p>
                                    </span>
                                </div>


                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
        </div>
            </div>
        </div>
        
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>