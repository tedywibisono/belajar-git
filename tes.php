<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="img/22-04-2022-furnitur1.jpg" alt="">
</body>
</html>
<?php $active = true; ?>
                        <?php for($a=0; $a<$jumlahrow; $a++) {;?>
                            
                            <div class="carousel-item<?php echo ($active == true)?"active":"" ?>">
                                <img class="img/d-block " src="img/<?php echo $file[$a]["gambar2"];?>" width= "340" >
                            </div>
                            <?php $active = false; ?>
                           
                            
                            
                        <?php } ?>