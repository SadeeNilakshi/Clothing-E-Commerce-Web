<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Olivia Fashion House | Navbar </title>




</head>

<body>
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
                    <input class="form-control me-2 fw-bold rounded-4" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Filter</button>
                </form>

            </div>
        </div>
    </nav>
</body>

</html>