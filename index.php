<?php

declare(strict_types = 1);
include 'includes/autoLoader.inc.php';

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


if($_POST['submit']){
    
    $subscribersObj = new SubscribersContr();
    $subscribersObj->createSubscribers($name, $email);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free/css/brands.css">
    <link rel="stylesheet" href="fontawesome-free/css/regular.css">
    <link rel="stylesheet" href="fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome-free/css/solid.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">Dev Bootcamp</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="Admin/index.php" class="nav-link">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="cover-page bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Become a <span class="text-warning"> Web Developer </span></h1>
                    <p class="lead my-4">
                        We focus on teaching our students the fundamentals of the latest
                        and greatest technologies to prepare them for their first dev role
                    </p>
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">
                        Start The Enrollment
                    </button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="images/homeImg.svg" alt="" />
            </div>
        </div>
    </section>

    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>

               <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post" class="input-group news-input">
               <!-- <div class="input-group news-input"> -->
                    <input type="text" class="form-control" placeholder="Enter Username" name="name" />
                    <input type="text" class="form-control" placeholder="Enter Email" name="email" />
                    <input type="submit" name="submit" value="Send" class="btn btn-dark">
                    <!-- <button class="btn btn-dark btn-lg" type="button" name="submit">Submit</button> -->
                <!-- </div> -->
               </form>
            </div>
        </div>
    </section>



    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="images/homeImg.svg" class="img-fluid" alt="" />
                </div>
                <div class="col-md p-5">
                    <h2>Learn The Fundamentals</h2>
                    <p class="lead">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Similique deleniti possimus magnam corporis ratione facere!
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
                        reiciendis eius autem eveniet mollitia, at asperiores suscipit
                        quae similique laboriosam iste minus placeat odit velit quos,
                        nulla architecto amet voluptates?
                    </p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2021 Frontend Bootcamp</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script> -->
</body>

</html>