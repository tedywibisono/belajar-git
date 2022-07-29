<?php 
require "funcsions.php";
$Rumah = mysqli_query($conn,"SELECT * FROM rumah");
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['id_level']!="1"){
 header("location:login.php?Gagal-Masuk-Bos");
}
var_dump($_SESSION);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<section id="rekomendasi">
    <a href="logout.php">logout</a>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center mt-5">
                    <H2>Data aploud</H2>
                </div>
            </div>
                <div class="row">
                 <?php foreach($Rumah as $row): ?>
                        <div class="col-4">
                            <div class="card p-2 mb-3 " style="width: 22rem;">
                                <img src="img/<?php echo $row ["gambar"];?>"width="335.23px" height="249.74px" alt="">
                                <div class="card-body">
                                    <h4>IDR <?php echo $row ["harga"];?></h4>
                                    <p class="mb-4 lh-sm"><?php echo $row ["alamat"];?> <br> <span class="text-danger"><?php echo $row ["status"];?></span> <br><a href="rumah.php?id=<?php echo $row ["id"];?>">Lihat</a><br><a href="hapus.php?id=<?php echo $row ["id"];?>"onclick="return confirm ('yakin ?');" >Hapus</a></p>
                                  
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
    
</body>
</html>