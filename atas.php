<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Static Navigation - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!-- ini week 3 -->
                            <div class="sb-sidenav-menu-heading">Week 1</div>
                            <a class="nav-link" href="array.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Array
                            </a>
                            <a class="nav-link" href="variable.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Variable
                            </a>
                            <a class="nav-link" href="array_data.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Array Data
                            </a>
                            <a class="nav-link" href="array_assosiative.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Array Assosiative
                            </a>
                            <a class="nav-link" href="array_multidimensi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Array Multidimensi
                            </a>
                        </div>

                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Week 2</div>
                            <a class="nav-link" href="Registrasi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Registrasi
                            </a>
                            <a class="nav-link" href="ifelse.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                If And Else
                            </a>
                            <a class="nav-link" href="form_belanja.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Form Belanja
                            </a>
                        </div>

                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Week 3</div>
                            <a class="nav-link" href="nilai.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Nilai Mahasiswa
                            </a>
                            <a class="nav-link" href="tester.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                tester
                            </a>
                        </div>

                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Week 5</div>
                            <a class="nav-link" href="class_nilai.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Class Nilai
                            </a>
                            <a class="nav-link" href="oop.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                OOP
                            </a>
                        </div>

                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>