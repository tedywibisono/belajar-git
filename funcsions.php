<?php 
$conn=mysqli_connect("localhost", "root", "", "studikasus");
$conn2 = new mysqli("localhost", "root", "", "studikasus");

function query($query){
    global $conn;
    $result= mysqli_query($conn, $query);
    $rows=[];
    while( $row= mysqli_fetch_assoc($result)){
        $rows[] = $row;

    }
    return $rows ;
}

function tambah($Data){
    global $conn2;
    $Rumah= htmlspecialchars($Data["Rumah"]);
    $Alamat= htmlspecialchars($Data["Alamat"]);
    $Luas= htmlspecialchars($Data["Luas"]);
    $Tidur = htmlspecialchars($Data["Tidur"]);
    $Status = htmlspecialchars($Data["Status"]);
    $Mandi = htmlspecialchars($Data["Mandi"]);
    $Harga = htmlspecialchars($Data["Harga"]);
    $id=$Data["id"];
   
    
    $Gambar= upload();
        if(!$Gambar){
            return false;
        }
    
    $query="INSERT INTO `rumah` VALUES ( '', '$id', '$Rumah', '$Alamat', '$Luas', '$Tidur', '$Mandi', '$Harga', '$Gambar', '$Status')";
    if ($conn2->query($query) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $query . "<br>" . $conn2->error;
      }
    

    $result=mysqli_query($conn2,"SELECT * FROM rumah ORDER BY id DESC LIMIT 1");
    // var_dump($result);
    $rows= mysqli_fetch_assoc($result);
    $id_rumah=$rows['id'];

        
   
    
    $Gambar2=upload2();
    // var_dump($Gambar2);
    $jumlahgambar= count($Gambar2);
    var_dump($jumlahgambar);


         if(!$Gambar2){
            return false;
        }
    for ($a=0; $a<$jumlahgambar; $a++){
        $insertgambar="INSERT INTO gambar VALUES ( '', '$id_rumah', '$Gambar2[$a]')";
        if ($conn2->query($insertgambar) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $insertgambar . "<br>" . $conn2->error;
          }
    }
   
}

function upload(){
        $namafiles = $_FILES['Gambar']['name'];
        $tmp_name = $_FILES['Gambar']['tmp_name'];
        $error = $_FILES['Gambar']['error'];
        $size = $_FILES['Gambar']['size'];
    
        // mencegah user tidak mengupload gambar
        if($error=== 4){
            echo"<script> 
                alert('Gambar belum di upload');
            </script>";
            return false;
        }
        // membuat user tidak bisa meng upload file selain gambar dengan format yang ditentukan
        $ekstensi=['jpg','jpeg','png'];
        $fileaploud=explode('.', $namafiles);
        $fileaploud= strtolower(end($fileaploud));
        if(!in_array($fileaploud, $ekstensi)){
            echo "<script> 
                alert('Ekstensi salah');
                </script>";
            return false;
        }
    
        // membatasi ukuran file yang bisa di aploud
        if($size>100000){
            echo "<script> 
            alert('ukuran terlalu besar');
            </script>";
            return false;
        }
        
        move_uploaded_file($tmp_name, 'img/'. $namafiles );
        return $namafiles;
    
       
    }

function upload2(){ 
    global $conn;
    $limit = 10 * 1024 * 1024;
    $ekstensi =  array('png','jpg','jpeg','gif');
    $jumlahFile = count($_FILES['foto']['name']);
    
    $a=[];
    var_dump($a);
    
    for($x=0; $x<$jumlahFile; $x++){
        $namafile = $_FILES['foto']['name'][$x];
        $tmp = $_FILES['foto']['tmp_name'][$x];
        $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
        $ukuran = $_FILES['foto']['size'][$x];
       
        if($ukuran > $limit){
            echo "<script> 
            alert('ukuran terlalu besar');
            </script>";
            return false;	
        }
        $fileaploud=explode('.', $namafile);
        $fileaploud= strtolower(end($fileaploud));
        if(!in_array($fileaploud, $ekstensi)){
            echo "<script> 
                alert('Ekstensi salah');
                </script>";
            return false;
        }
        
        move_uploaded_file($tmp, 'img/'.date('d-m-Y').'-'.$namafile);
        $c = date('d-m-Y').'-'.$namafile;
        $a[]=$c;
        
    }
        return $a;
        
}
function cari($keyword){
    $query="SELECT * FROM `rumah` WHERE 
    `alamat` LIKE '%$keyword%' OR
    `tmpttidur` LIKE '%$keyword%' OR
    `tmptmandi` LIKE '%$keyword%'OR 
    `rumah` LIKE '%$keyword%' OR
    `status` LIKE '%$keyword%'
    ";
    return query($query);
}
   
function register($Data){
    global $conn;
    $email= strtolower(stripslashes($Data['email']));
    $username= strtolower(stripslashes($Data['username']));
    $password= mysqli_real_escape_string($conn, $Data['password']);
    $level=  strtolower(stripslashes($Data['id_level']));

    $result =mysqli_query($conn,"SELECT email FROM `login` WHERE email = '$email'");
    $efek=mysqli_num_rows($result);
    if($efek ===1){
        echo"<script>
                 alert('email sudah dipakai')
            </script>";
        return false;
    }
    // enkripsi password
    $password=password_hash($password, PASSWORD_DEFAULT);
    // tambahkan data ke database
    mysqli_query($conn, "INSERT INTO `login` VALUES ('','$level', '$username', '$password', '$email')");
    return mysqli_affected_rows($conn);


}
function hapus($id){
    global $conn2;
    $query="DELETE FROM rumah WHERE id = '$id'";
    mysqli_query($conn2,$query);
    return mysqli_affected_rows($conn2);}