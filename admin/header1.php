<?php 
if(!isset($pagetitle)) { $pagetitle = "dashboard"; } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $pagetitle;?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">




    <!-- <script src="library/bootstrap-5/bootstrap.bundle.min.js"></script> -->
    <script src="library/dselect.js"></script>






    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
    .container {
        margin-right: 400px;
    }
    </style>
</head>

<body>


    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">

                <span class="d-none d-lg-block">Products</span>

            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="data:image/png;base64,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"
                            alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                    </a>


                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">







                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>



                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <h3>Admin</h3>
        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#header-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>update</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="header-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="category.php">
                            <span>Images</span>
                        </a>
                    </li>



                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#cus-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Content</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="cus-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="category1.php">
                            <span>text</span>
                        </a>
                    </li>



                </ul>
            </li>







            <li class="nav-item" style="margin-top:150%;">
                <a class="btn btn-danger" href="logout.php" style="width:93%;">
                    <span>Logout</span>


                </a>

            <li class="nav-item">
           
                </a>
                <a href="pages-register.php" style="width:93%;color:#fff;" class="btn btn-info"><i class="fa-solid fa-file-pen"></i>Register</a>


                

            </li>

            </li>

        </ul>



        <!-- End Forms Nav -->






        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">





        <!--display-->