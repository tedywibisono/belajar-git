<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png" type='image/x-icon'>


  <title>Rumah impian</title>
  </head>
  <body>
    <section class="login d-flex">
        <div class="login-left  w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header">
                            <h1>Welcome back</h1>
                        <p>Welcome back! Please enter your details.</p>
                    </div>
                    <div class="login-form">
                        <form action="" method="post">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">

                            <label for="Password" class="form-label">Password </label>
                            <input type="Password"name="password"class="form-control" id="Password" placeholder="Enter your password">

                            <a href="#" class="text-decoration-none text-center">Forgot password</a>
                            <button class="sign-in"name="signin">sign in</button>
                        </form>
                        <button class="sign-in-google">
                        <img src="img/google.png" alt="">    
                        sign in with google</button>
                        <div class="text-center">
                            <span class="d-inline">Don’t have an account?<a href="register.php" class="d-inline">Sign up for free</a></span>

                        </div>
                    </div>

                </div>
            </div>
            
            
        </div>
        <div class="login-right w-50 h-100 ">
         <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/loginn.jpg" width= "711px" height="707px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/login6.jpg"width= "711px" height="707px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/login5.jpg"width= "711px" height="707px" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>