
<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                        
                       
                        <?php if (isset($_SESSION['username'])):?>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Welcome, <?php echo $_SESSION['username'];?>
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
    
        

<div style="background-color:#34495E ; height: 300px; margin-top: 100px; margin-left: 30px; margin-right: 30px;"
            class="row">
            
            <div class="column"><a href="profile.php"><img src="images/profile-logo.jpg" ><p style="color:red; text-align: left; font-weight: bold; margin-left: 15px;">Name:<?php echo $_SESSION['username'];?></p></div>
            

            <div class="column">
                <div>
               
                   <a href="editprofile.php" ><button style="margin-top:20px; background-color: white; color: red; padding: 10px; width: 200px; font-weight: bold;">Edit your Profile</button></a>
                </div>
                <div>
                <a href="resetpassword.php" >
                    <button style="margin-top:20px; background-color: white; color: red; padding: 10px; width: 200px; font-weight: bold;">Reset your Password</button></div>
                
            </div>
            
        </div>
        </a>
                <div class="hero3">
                <img class="hero-img" src="images/vase.png" alt="">
            
    </div>
</body>
</html>