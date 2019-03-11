<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/png" href="img/favIcon.png" />
    <link rel="shortcut icon" type="image/png" href="img/favIcon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <!--Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Boy Brother Trucking</title>
</head>

<body id="body">
    <!-- ======================================================================= -->
    <!--                                TOP LOGO                                 -->
    <!-- ======================================================================= -->
    <div class="container" id="logo">
        <div class="row">
            <div class="col text-center d-none d-sm-none d-md-block">
                <img src="img/logo.png" alt="">
            </div>
        </div>
    </div>

    <!-- ======================================================================= -->
    <!--                                  MENU                                   -->
    <!-- ======================================================================= -->
    <nav class="nav nav-pills bg-blue  justify-content-center d-none d-md-flex" id="navbar">
        <a href="index.php" class="nav-link text-white">Home</a>

        <!-- about -->
        <a href="#" class="nav-link text-white dropdown d-flex p-0">
            <div class="btn-group">
                <a class="nav-link text-white dropdown-toggle flex-fill" href="#" role="button" id="AboutMenu"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About Us
                </a>

                <div class="dropdown-menu" aria-labelledby="#AboutMenu">
                    <a class="dropdown-item" href="index.php#mission">Mission</a>
                    <a class="dropdown-item" href= "aboutUs.php">About Us</a>

                </div>
            </div>
        </a>
        <!-- services -->
        <a href="#" class="nav-link text-white dropdown d-flex p-0">
            <div class="btn-group">
                <a class="nav-link text-white dropdown-toggle" href="#" role="button" id="ServicesMenu" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Services
                </a>

                <div class="dropdown-menu" aria-labelledby="#ServicesMenu">
                    <a class="dropdown-item" href="http://wnt.boydbros.com/wntv5/Login.wnt" target="_blank">Load Tracking</a>
                    <a class="dropdown-item" href="services.php#quote">Request a Quote</a>
                    <a class="dropdown-item" href="services.php#serviceMaps">Service Maps</a>
                    <a class="dropdown-item" href="services.php#creditApplication">Credit Application</a>
                </div>
            </div>
        </a>
        <!-- Employee -->
        <a href="#" class="nav-link text-white dropdown d-flex p-0">
            <div class="btn-group">
                <a class="nav-link text-white dropdown-toggle flex-fill" href="#" role="button" id="EmployeeMenu"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Employees
                </a>

                <div class="dropdown-menu" aria-labelledby="EmployeeMenu">
                    <a class="dropdown-item" href="#">Employee Login</a>
                    <a class="dropdown-item" href="#">Benefits</a>
                    <a class="dropdown-item" href="#">MessageBoard</a>
                    <a class="dropdown-item" href="#">Self Service</a>
                </div>
            </div>
        </a>

        <!-- careers -->
        <a href="#" class="nav-link text-white dropdown d-flex p-0">
            <div class="btn-group">
                <a class="nav-link text-white dropdown-toggle flex-fill" href="#" role="button" id="CareersMenu"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Careers
                </a>

                <div class="dropdown-menu" aria-labelledby="CareersMenu">
                    <a class="dropdown-item" href="#">Driver Opportunities</a>
                    <a class="dropdown-item" href="#">Another action</a>
                </div>
            </div>
        </a>

        <a href="#" class="nav-link text-white ">Contact</a>

        <!-- support -->
        <a href="#" class="nav-link text-white dropdown d-flex p-0">
            <div class="btn-group">
                <a class="nav-link text-white dropdown-toggle flex-fill" href="#" role="button" id="SupportMenu"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Support
                </a>

                <div class="dropdown-menu" aria-labelledby="#SupportMenu">
                    <a class="dropdown-item" href="#">Owner operater</a>
                    <a class="dropdown-item" href="#">Driver Settlement</a>
                    <a class="dropdown-item" href="#">HelpDesk Remote</a>
                </div>
            </div>
        </a>


        <a href="#" class="nav-link text-white">News</a>
        <a href="#" class="nav-link text-white">Blog</a>
        <a href="#" class="nav-link text-white">Merch</a>
    </nav>


    <!-- ======================================================================= -->
    <!--                               MOBILE MENU                               -->
    <!-- ======================================================================= -->

    <nav class="navbar navbar-light nav-expand-sm bg-blue d-md-none d-lg-none" id="navbarMobile">
        <a href="#" class="navbar-brand"><img src="img/favIcon.png" height="50" alt=""></a>
        <img src="img/BoydBros-mobile-logo.png" alt="" height="50">
        <button class="navbar-toggler bg-tan" type="button" data-toggle="collapse" data-target="#navExpansion"
            aria-controls="navExpansion" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navExpansion">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class=" dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">About Us</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Mission</a>
                            <a class="dropdown-item" href="#">About Us</a>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class=" dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Load Tracking</a>
                            <a class="dropdown-item" href="#">Request a Quote</a>
                            <a class="dropdown-item" href="#">Credit Application</a>
                            <a class="dropdown-item" href="#">service Maps</a>
                        </div>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class=" dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Employees</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Employee Login</a>
                            <a class="dropdown-item" href="#">Benefits</a>
                            <a class="dropdown-item" href="#">MessageBoard</a>
                            <a class="dropdown-item" href="#">Self Service</a>
                        </div>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class=" dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Careers</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Driver Opportunities</a>
                            <a class="dropdown-item" href="#">Non Driver Opportunities</a>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Contact</a>
                </li>

                <li class="nav-item">
                    <a href="#" class=" dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Support</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Owner Operater</a>
                            <a class="dropdown-item" href="#">Driver Settlement</a>
                            <a class="dropdown-item" href="#">HelpDesk Remote</a>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-white">News / Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Merchandise</a>
                </li>
            </ul>
        </div>
    </nav>