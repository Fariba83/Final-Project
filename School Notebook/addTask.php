<?php
// include('server.php');
    // $courseName = $_GET['courseButton'];
    // echo $courseName;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
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
        </nav>

        <!-- <div class="header">
        <h2>Registration</h2>
        </div> -->
        <div class="container ">
            <div class="row">
                <div class="col-6">
                    <form action="" method="POST" class="list">
                        <label for="assignment" class="form-label">Assignment/Task Name
                            <input class="form-control" type="text" name="assignment" id="assignment">
                        </label><br>
                        <label class="input-group-text" for="inputGroupSelect01">Select Course</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Back End Programming</option>
                                <option value="2">Capstone Web Site Design</option>
                                <option value="3">Web Content Management</option>
                                <option value="4">Career Launch</option>
                                <option value="5">Database Design</option>
                            </select><br>
                        <label for="duedate" class="form-label">Due Date
                            <input class="form-control" type="date" name="duedate" id="duedate">
                        </label>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-6">
                    <form action="course.php" method="GET" class="list">
                        <strong>Choose the Course!</strong> <br><br>
                        <input type="submit" class="btn btn-primary" value="BACK END PROGRAMMING" name = "courseButton"><br><br>
                        <input type="submit" class="btn btn-primary" value="CAPSTONE WEB SITE DESIGN" name = "courseButton"><br><br>
                        <input type="submit" class="btn btn-primary" value="WEB CONTENT MANAGEMENT" name = "courseButton"><br><br>
                        <input type="submit" class="btn btn-primary" value="CAREER LAUNCH" name = "courseButton"><br><br>
                        <input type="submit" class="btn btn-primary" value="DATABASE DESIGN" name = "courseButton">
                    </form>
                </div>
            </div>
            
        </div>
    </div>
     
</body>
</html>