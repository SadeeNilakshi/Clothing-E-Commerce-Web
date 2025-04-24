<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="resources/resources2/icon/icon2.png" />
    <title>Olivia Fashion House | Home </title>
</head>

<body onload="loadProduct(0);">
    <div class="container">
        <div>

            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand h1 mb-0" href="home.php">
                        <img class="me-2" src="resources/resources2/icon/icon2.png" height="30" />
                        Olivia Fashion House </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto fw-bold">

                            <li class="nav-item me-5">
                                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-person-circle me-2"></i> Profile</a>
                            </li>

                            <li class="nav-item me-5">
                                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-calendar-event-fill me-2"></i></i>History</a>
                            </li>

                            <li class="nav-item me-5">
                                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cart4 me-2"></i>Cart</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-door-closed-fill me-2"></i></i>Sign Out</a>
                            </li>
                        </ul>

                        <form class="d-flex col-4" role="search">
                            <input class="form-control me-2 fw-bold rounded-5" type="search" placeholder="Search Product" aria-label="Search" id="product" onkeyup="searchP(0);">
                            <button class="btn btn-dark rounded-5" type="submit">Filter</button>
                        </form>

                    </div>
                </div>
            </nav>
            <!-- navbar -->


            <!-- carousal part -->
            <div class="col-12 mt-1 justify-content-center d-flex mt-5">
                <div class="row">

                    <!-- carousel -->

                    <div class="col-12 d-none d-lg-block mb-3">
                        <div class="row">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade col-12 mt-5">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="resources/resources2/carousal/carousal1.jpg" class="d-block rounded-2" height="850px">
                                        <div class="carousel-caption d-none d-md-block poster-caption1">
                                            <h5 class="poster-title1 text-bg-transparent ">Olivia Fashion House</h5>
                                            <p class="poster-text text-bg-transparent fs-5">"Bring an edge back into your wardrobe with cool looks you can't do without from Olivia Fashion House, the best place for online clothes shopping."</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/resources2/carousal/carousal2.jpg" class="d-block rounded-2" height="850px">
                                        <div class="carousel-caption d-none d-md-block poster-caption1">
                                            <h5 class="poster-title1 text-bg-transparent ">Olivia Fashion House</h5>
                                            <p class="poster-text text-bg-transparent fs-5">"Bring an edge back into your wardrobe with cool looks you can't do without from Olivia Fashion House, the best place for online clothes shopping."</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/resources2/carousal/carousal4.jpg" class="d-block rounded-2" height="850px">
                                        <div class="carousel-caption d-none d-md-block poster-caption1">
                                            <h5 class="poster-title1 text-bg-transparent ">Olivia Fashion House</h5>
                                            <p class="poster-text text-bg-transparent fs-5">"Bring an edge back into your wardrobe with cool looks you can't do without from Olivia Fashion House, the best place for online clothes shopping."</p>
                                        </div>
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
                    </div>


                </div>
            </div>
            <!-- carousel part -->

        </div>
    </div>

    <hr>

    <!-- load product -->
    <div class="row col-10 offset-1 card1" id="productId">

      

    </div>
    <!-- load product -->

    <!--Footer -->
    <div class="col-12 mt-5">
        <p class="text-center">&copy; 2024 OliviaFashionHouse.lk || All Right Reserved</p>
    </div>
    <!--Footer -->

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>