<?php
  session_start();
  
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

    <title>Rumah Impian</title>
  </head>
  <body>
      <!-- bagian navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
  <div class="container">
    <a class="navbar-brand" href="#">
    <img src="img/icon.png" alt="" width="30" class="d-inline-block align-text-top me-3">Rumah Impian</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="home.php">BRANDA</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="beli.php">PROPERTI</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">FITUR</a>
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
<!-- hero section -->
<section id="hero">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-6 hero-tagline my-auto">
                <h1>Membantu Temukan Rumah Impian.</h1>
                <p><span class= fw-bold>Runah Impian </span>hadir untuk temukan rumah terbaik untukmu, untuk di jual ataupun di sewa dengan sumber terpercaya</p>
                <button class="button-lg-primary">Temukan rumah</button>
                <a href=""><img src="src=img/arrow.png" alt=""></a>
            </div>
        </div>
        <img src="img/rumah.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
        <img src="img/titiktitik.png" alt="" class="h-100 position-absolute start-0 top-0 accsen-image">
    </div>
</section>
<!-- layanan -->
<!-- layanan -->
<section id="layanan">
        <div class="container layanan">
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <h2>Layanan Kami</h2>
                    <span class="sub-title">Rumah impian hadir sebagai solusi buat kamu</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="img/iconrumah.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-5">Properti Baru</h3>
                        <p class="mt-3"> Rumah impian kini jadi kenyataan,  beli rumah baru dengan fasilitas terbaik dengan lingkungan yang nyaman    
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="img/town 2.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Beli Rumah</h3>
                        <p class="mt-3"> Belu rumah yang sempurna dengan harga terbaik kualitas terjamin dari sumber  terpercaya   
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="img/assets 2.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Sewa Rumah</h3>
                        <p class="mt-3"> Sewa rumah yang indah untuk keluarga anda, pilihan terbaik untuk tempat tinggal keluargamu    
                        </p>
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