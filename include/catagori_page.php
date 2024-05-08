<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sahoshi Kontho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <link rel="stylesheet" href="./asset/style.css" />


</head>

<body>
    <div class="content_body container">

        <!-- header start  -->
        <?php
        include('./header.php');

        include('../include/marque.php');
        ?>
        <!-- header end  -->




        <!-- content view section start-->
        <div class="content_view_section  container mt-2">
            <!-- content position derection  menu start -->
            <nav class="navbar navbar-expand-lg navbar-light nav_derection ">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">জাতীয়</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">খবর</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">নির্বাচনের সংবাদ</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </nav>


            <div class="row  container-fluid  mb-5">
                <div class="col-md-7 mb-2 ">

                    <!-- curosol code  -->
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="../asset/img/news01 (2).png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../asset/img/news01 (3).png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../asset/img/news01 (5).png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>
                <!-- squre size carusol side box -->
                <div class=" col-md-5">
                    <div class="row  d-flex justify-content-between  align-items-center row-cols-2 row-gap-1 h-100  ">
                        <div class="col-md-6">
                            <img src="../asset/img/news01 (2).png" alt="" class=" img-fluid h-200 ">
                        </div>
                        <div class="col-md-6">
                            <img src="../asset/img/news01 (3).png" alt="" class=" img-fluid ">
                        </div>

                        <div class="col-md-6">
                            <img src="../asset/img/news01 (5).png" alt="" class=" img-fluid ">
                        </div>
                        <div class="col-md-6">
                            <img src="../asset/img/news01 (4).png" alt="" class=" img-fluid ">
                        </div>

                    </div>

                </div>






            </div>


            <!-- catagori ways content list -->
            <div class="row bg-white   " style="width: 60vw;">

                <div class="col-md-8">
                    <h6 class=" border-2 border-secondary-subtle  rounded-2 ">Catagory</h6>
                    <hr>

                    <!-- news and wifi icon  -->
                    <div class="row d-flex  justify-content-between align-items-center p-3 ">
                        <div class="col-md-5">
                            <h3>News</h3>
                        </div>
                        <div class="col-md-1">
                            <i class="fa-solid fa-wifi "></i>
                        </div>
                    </div>

                    <!-- list of catagori nws and wifi under  -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-white  ">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ">
                                    <li class="nav-item mini_nav">
                                        <a class="nav-link " aria-current="page" href="#">Event</a>
                                    </li>
                                    <li class="nav-item mini_nav">
                                        <a class="nav-link" href="#">Features</a>
                                    </li>
                                    <li class="nav-item mini_nav">
                                        <a class="nav-link" href="#">Pricing</a>
                                    </li>
                                    <li class="nav-item mini_nav">
                                        <a class="nav-link" href="#">Playing</a>
                                    </li>
                                    <li class="nav-item mini_nav">
                                        <a class="nav-link" href="#">Entertenment</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                    <hr>

                    <!-- content list content 1 -->
                    <div class="row  d-flex justify-content-between p-3 mb-4">
                        <div class="col-md-8">
                            <h5 class="pb-1 fw-bold ">Lorem ipsum, dolor sit amet consectetur Perspiciatis ullam corrupti cupiditate!</h5>

                            <p class=" fw-light flex-wrap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, sequi? Animi provident non minima unde ab molestias necessitatibus .
                            </p>
                            <a href="../include/landing_page.php" class=" px-4 py-2 bg-danger  text-white  rounded  text-decoration-none fw-bold ">More</a>
                        </div>
                        <div class="col-md-4">
                            <img src="../asset/img/news01 (2).png" alt="" class=" img-fluid h-100">
                        </div>

                    </div>

                    <!-- content list content 2 -->
                    <div class="row  d-flex justify-content-between p-3 mb-4">
                        <div class="col-md-8">
                            <h5 class="pb-1 fw-bold ">Lorem ipsum, dolor sit amet consectetur Perspiciatis ullam corrupti cupiditate!</h5>

                            <p class=" fw-light flex-wrap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, sequi? Animi provident non minima unde ab molestias necessitatibus .
                            </p>
                            <a href="../include/landing_page.php" class=" px-4 py-2 bg-danger  text-white  rounded  text-decoration-none fw-bold ">More</a>
                        </div>
                        <div class="col-md-4">
                            <img src="../asset/img/news01 (3).png" alt="" class=" img-fluid h-100">
                        </div>

                    </div>

                    <!-- content list content 3 -->
                    <div class="row  d-flex justify-content-between p-3 mb-4">
                        <div class="col-md-8">
                            <h5 class="pb-1 fw-bold ">Lorem ipsum, dolor sit amet consectetur Perspiciatis ullam corrupti cupiditate!</h5>

                            <p class=" fw-light flex-wrap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, sequi? Animi provident non minima unde ab molestias necessitatibus .
                            </p>
                            <a href="../include/landing_page.php" class=" px-4 py-2 bg-danger  text-white  rounded  text-decoration-none fw-bold ">More</a>
                        </div>
                        <div class="col-md-4">
                            <img src="../asset/img/news01 (5).png" alt="" class=" img-fluid h-100">
                        </div>

                    </div>

                    <!-- content list content 4 -->
                    <div class="row  d-flex justify-content-between p-3 mb-4">
                        <div class="col-md-8">
                            <h5 class="pb-1 fw-bold ">Lorem ipsum, dolor sit amet consectetur Perspiciatis ullam corrupti cupiditate!</h5>

                            <p class=" fw-light flex-wrap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, sequi? Animi provident non minima unde ab molestias necessitatibus .
                            </p>
                            <a href="../include/landing_page.php" class=" px-4 py-2 bg-danger  text-white  rounded  text-decoration-none fw-bold ">More</a>
                        </div>
                        <div class="col-md-4">
                            <img src="../asset/img/news01 (2).png" alt="" class=" img-fluid h-100">
                        </div>

                    </div>

                    <!-- content list content 5 -->
                    <div class="row  d-flex justify-content-between p-3 mb-4">
                        <div class="col-md-8">
                            <h5 class="pb-1 fw-bold ">Lorem ipsum, dolor sit amet consectetur Perspiciatis ullam corrupti cupiditate!</h5>

                            <p class=" fw-light flex-wrap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, sequi? Animi provident non minima unde ab molestias necessitatibus .
                            </p>
                            <a href="../include/landing_page.php" class=" px-4 py-2 bg-danger  text-white  rounded  text-decoration-none fw-bold ">More</a>
                        </div>
                        <div class="col-md-4">
                            <img src="../asset/img/news01 (5).png" alt="" class=" img-fluid h-100">
                        </div>

                    </div>






                </div>
                <div class="col-md-3 border-start border-2 border-secondary-subtle ">
                    <h4 class=" text-uppercase text-primary " style="font-size: 18px; font-weight:600; ">Stay with Us</h4>
                    <hr>
                </div>

            </div>



            <!-- footer start  -->
            <?php
            include('./footer.php');
            ?>
            <!-- footer end  -->
        </div>
        <!-- java scriptscript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>