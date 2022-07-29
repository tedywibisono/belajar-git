<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
    exit;}
require "funcsions.php";
    // cek data berhasil ditambahkan atau tidak
if (isset($_POST["submit"])){
    

    
    if ( tambah($_POST)== 0){
        echo "<div class='alert alert-success'>Data sukses di tambahkan <a href='beli.php'>Lihat data</a></div>";
    }else {
        echo " 
        <div class='alert alert-danger'>Data gagal di tambahkan <a href='#'>ulangi upload</a></div>";
        echo "<script> 
        alert'Gagal'
        </script>";
    }

}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="icon" href="img/icon.png" type='image/x-icon'>

    <title>Rumah Impian</title>
</head>
<body>
<div class="w-50 mx-auto border mt-5 p-3">
    <a class="btn btn-outline-success mb-3" href="index.php" role="button"><i class="bi bi-house"></i></a>
        <form action="" method="post"enctype="multipart/form-data">
                
                    <label for="Rumah"> Rumah : </label>
                    <input type="text" name="Rumah" id="Rumah" required class="form-control">
            
                    <label for="Alamat">Alamat :</label>
                    <input type="text" name="Alamat" id="Alamat" required class="form-control">
                
               
                    <label for="Luas">Luas  :</label>
                    <input type="text" name="Luas" id="Luas" required class="form-control">
                
                
                    <label for="Tidur">Jumlah tempat tidur :</label>
                    <input type="text" name="Tidur" id="Tidur" required class="form-control">

                    <label for="Mandi">Jumlah kamar mandi :</label>
                    <input type="text" name="Mandi" id="Mandi" required class="form-control">

                    <label for="Harga">Harga :</label>
                    <input type="text" name="Harga" id="Harga" required class="form-control">
                    <br>

                 
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Status">
                        <option selected>Status</option>
                        <option value="Jual">Jual</option>
                        <option value="Sewa">Sewa</option>
                    </select>

                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">  


               
                    <label for="Gambar">GAMBAR :</label>
                    <input type="file" name="Gambar" id="Gambar" class="form-control">

                    <label for="Foto">Foto Ruangan</label>
                    <input type="file" name="foto[]" accept="image/*" multiple id="Foto" required class="form-control">
               
                    <input type="submit" name="submit" value="Simpan" class="btn btn-success mt-3">
                    
                
            
        </form>
    </div>
</body>
</html>