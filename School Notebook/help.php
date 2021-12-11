<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Need help?</title>
        <!--Font awesome CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
        <!-- css link  -->
        <link rel="stylesheet" href="help.css">
        <style>
            .email .btn{
  padding: 4px 20px; ;
  width: 99%;
  height: 30px;
  font-size: 15px;
  font-weight:bold;
  color: #fff;
  background-color: #E74C3C;
  border: none;
  border-radius: 5px;
  text-transform: uppercase;
  text-align: center;
}

form{
  width: 100%;
  margin-top:15px;
  padding: 20px;
  margin-bottom:15px;
  border: 1px solid #E74C3C;
  background: white;
  border-radius: 10px;
  z-index: 1;
  position: absolute;
  
}

.input-group{
  margin: 10px 10px 10px 10px;;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
  font-size: 15px;

}
.input-group input{
  height: 30px;
  width: 93%;
  padding: 4px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
margin:3px;
}
form .input-field{
  width: 100%;
  padding: 10px 5px;
  margin: 5px 5px;
  border-left:0;
  border-top: 0;
  border-right: 0;
  border-bottom: 1px solid #999;
  outline: none;
  background: transparent;

}


.form-header{
  padding: 4px 20px; ;
  width: 99%;
  height: 30px;
  font-size: 15px;
  color: white;
  background: #E74C3C;
  border: none;
  border-radius: 5px;
  text-transform: uppercase;
  text-align: center;
  margin:3px;
  margin-bottom:30px;
}
.site-footer
{
  font-family: DIN;
  background-color:#22303D;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer p{
  color:gray;
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#E74C3C;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block;
  
}
.footer-links a
{
  color:gray;
  text-decoration:none;
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#E74C3C;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#E74C3C;
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.fa-leaf{
  color: #E74C3C;
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
        </style>
    </head>


    <body>
        <div class="wrapper">

            <nav class="navbar navbar-expand-lg navbar-dark tm-40px">
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
                                <a class="nav-link" href="signup.php">SIGN UP</a>
                            </li>
                        </ul>

                    </div>
            </nav>
            <div class="hero">
                <img class="hero-img" src="images/help.png" alt="">
            </div>
            <div class="line"></div>
            <div class="help-content">
                
                <div class="row align-items-center">
      
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 "></i>
        <h2 class="font-weight-light">Have some doubts?</h2>
        
        
    </div>
    </div>
    <div class="email">
        <p class="font-italic text-muted mb-4">We'd love to help you out. All enquiries to info@schoolnotebook.com please.</p> <a href="mailto:Samriti1187@conestogac.on.ca" class="btn btn-light px-5 rounded-pill shadow-sm">GET IN TOUCH</a>
        </div>


                <!-- <form class="contact-form" action="contactform.php" method="post">
                    <input type="text" name="name" placeholder="Full Name"><br>
                    <input type="text" name="mail" placeholder="Your e-mail"><br>
                    <input type="text" name="subject" placeholder="Subject"><br>
                    <textarea name="message"   placeholder="Message"></textarea><br>
                    <input type="submit" name="submit" value="Submit">
                </form> -->
            </div>
        </div>
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

        <script type="text/javascript" src="https://popupsmart.com/freechat.js">

        </script>
        <script>
            window.start.init({
                title: "Hi there ✌️",
                message: "How may we help you? Just send us a message now to get assistance.",
                color: "#E74C3C",
                position: "right",
                placeholder: "Enter your message",
                withText: "Write with",
                viaWhatsapp: "Or write us directly via Whatsapp",
                gty: "Go to your",
                awu: "and write us",
                connect: "Connect now",
                button: "Write us",
                device: "everywhere",
                logo: "https://d2r80wdbkwti6l.cloudfront.net/2IjX2IBDoNlZ1KiuxN6cKXS6qLY3jSLP.jpg",
                person: "https://d2r80wdbkwti6l.cloudfront.net/qVesa1XDfD7j0RDlCFcD22V8sswwzoUz.jpg",
                services: [{
                    "name": "whatsapp",
                    "content": "+14379954457"
                }]
            })
        </script>

    </body>


</html>