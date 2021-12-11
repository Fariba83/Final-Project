
<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>old Profile</title>
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
            <svg class="sign_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1440 320">
                <path fill="#34495E" fill-opacity=".5" d="M0,256L34.3,261.3C68.6,267,137,277,206,272C274.3,267,343,245,411,213.3C480,181,549,139,
             617,138.7C685.7,139,754,181,823,186.7C891.4,192,960,160,1029,154.7C1097.1,149,1166,171,
             1234,186.7C1302.9,203,1371,213,1406,218.7L1440,224L1440,0L1405.7,0C1371.4,0,1303,0,1234,
             0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,
             0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
            </svg>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png" width="70px" height="70px"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="signin_navbar"class="collapse navbar-collapse" id="navbarScroll">
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
                            <a class="nav-link" href="signup.php">SIGN UP</a>
                        </li>
                       
                        <?php if (isset($_SESSION['username'])):?>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome <?php echo $_SESSION['username'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="profile.php" style="color:#fff;">Profile</a></li>
          <li><a class="dropdown-item" href="download.php?logout='1'" style="color:#fff;">Log out</a></li>
          </ul>  
           </li>
           <?php endif ?>

                    </ul>

          
                </div>
        </nav>
    
    <p class="profile_content">Name: <?php echo $_SESSION['username'];?></p>
  
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