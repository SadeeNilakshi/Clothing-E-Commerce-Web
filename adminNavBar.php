<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Olivia Fashion House | Navbar </title>




</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="adminDashboard.php">
                <img class="me-2" src="resources/resources2/icon/icon2.png" height="30" />
                Olivia Fashion House | Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-1">

                    <li class="nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="manageUser.php"><i class="bi bi-person-lines-fill me-1"></i> User Management</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="manageProduct.php"><i class="bi bi-archive-fill me-2"></i>Product Management</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="manageStock.php"><i class="bi bi-cart4 me-2"></i>Stock Management</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="adminReport.php"><i class="bi bi-clipboard2-check-fill me-2"></i>Reports</a>
                    </li>

                    <li class="nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="adminSignin.php"><i class="bi bi-door-closed-fill me-2"></i>Sign Out</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
</body>

</html>