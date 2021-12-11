<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to School Notebook</title>
        <!--Font awesome CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
        <!-- css link  -->
        <link rel="stylesheet" href="style.css">
    </head>
  

    <body>
    <div class="wrapper">
    <div class="wave">
                <!-- wavy SVG -->
                <div class="wave">
                <!-- wavy SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 70 1440 320">
                    <path fill="#34495E" fill-opacity="1"
                        d="M0,32L26.7,48C53.3,64,107,96,160,96C213.3,96,267,64,320,64C373.3,64,427,96,480,
                        133.3C533.3,171,587,213,640,229.3C693.3,245,747,235,800,218.7C853.3,203,907,181,960,
                        165.3C1013.3,149,1067,139,1120,160C1173.3,181,1227,235,1280,245.3C1333.3,256,1387,224,
                        1413,208L1440,192L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,
                        0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
                    </path>
                </svg>
            </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
      <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png" width="70px" height="70px"
            alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">ABOUT </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="help.php">HELP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signin.php">SIGN IN</a>
            </li>
            <li class="nav-item">
                <a id="nav-signup"class="nav-link" href="signup.php">SIGN UP</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
        <!-- <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png" width="70px" height="70px"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="signin_navbar" class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll"
                        style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="help.php">HELP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signin.php">SIGN IN</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-signup"class="nav-link" href="signup.php">SIGN UP</a>
                        </li>
                    </ul>

                </div>
        </nav> -->
            <div class="hero">
                <img class="hero-img" src="images/hero.png" alt="">
            </div>
            <div class="line"></div>
        
        <div class="home_text">
            <h1>School Notebook</h1>
          
        </div>
        <div class="button">
            <a href="signin.php"><button id="home_btn1"class="btn-home" type="button">Sign in</button></a>
            <a href="signup.php"><button  id="home_btn2" class="btn-home" type="button">Sign up</button></a>
        </div>





        </div>
    <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"><i>SCHOOL NOTEBOOK </i> <br>Our mission is to help improve students' lives and education through organisation.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6></h6>
            
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="about.php">About Us</a></li>
              
              <li><a href="signup.php">Sign Up</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">School Notebook</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f fa-lg"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter fa-lg"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fab fa-dribbble fa-lg"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in fa-lg"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

    </body>

</html>