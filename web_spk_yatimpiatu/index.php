<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <meta name="description" content="">
    <meta name="author" content=""> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Anak Yatim</title>

    <!-- Custom font untuk web-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/6dd0d33a7f.js" crossorigin="anonymous"></script>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Script untuk bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Link untuk membuat Rumus menggunakan MathJax-->
    <script>
        MathJax = {
            tex: {
                inlineMath: [['$', '$'], ['\\(', '\\)']]
            },
            svg: {
                fontCache: 'global'
            }
        };
    </script>
    <script type="text/javascript" src="path-to-MathJax/MathJax.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div class="maincontent-wrapper d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-4 pb-4">
                <h1 class="fs-4" id="fs-4">
                    <span class="bg-white text-dark rounded shadow px-2">K</span>
                    <span class="text-white">elompok 4</span>
                </h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
            </div>
            <ul class="list-unstyled px-2">
                <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block">Home</a></li>
                <li class=""><a href="halaman_rumus/normalisasi.php"
                        class="text-decoration-none px-3 py-2 d-block">Rumus</a></li>
                <li class=""><a href="perangkingan.php" class="text-decoration-none px-3 py-2 d-block">Ranking</a>
                </li>
                <!-- <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">Menu3</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">Menu4</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">Menu5</a></li> -->
            </ul>

            <hr class="h-color mx-3">
            <!-- <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">Settings</a></li>
            </ul> -->
        </div>
        <!-- Div Konten Utama Web -->
        <div class="content" style="margin: 20px;">

            <!-- Topbar default bootstrap -->
            <nav class="navbar bg-dark shadow p-3 mb-5 bg-white rounded" id="navbar">
                <a style="font-size: 2rem;">Data Awal</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rumus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ranking</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="dashboard-content">
                <!-- <h1 class="title-index">Data Anak Yatim</h1> -->
                <table id="table-data-mentah" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Sekolah</th>
                            <th scope="col">Tanggungan</th>
                            <th scope="col">Penghasilan</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("connection.php");

                        // nampilin data dari database
                        $query = "SELECT * FROM data_mentah";
                        $hasil = mysqli_query($con, $query);

                        $i = 1;
                        while ($row = mysqli_fetch_array($hasil)) {
                            echo "<tr><td>" . $i++ . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['sekolah'] . "</td>";
                            echo "<td>" . $row['tanggungan'] . "</td>";
                            echo "<td>" . $row['penghasilan'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Rumus normalisasi dengan MathJax -->
            <!-- <div id="formula-normalisasi" style="overflow-x:auto;">
            $$ {r_{ij} = \frac{x_{ij}}{\sqrt{\sum_{i_{=1}}^m}x_{ij}^2}}$$
            </div> -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

    <!-- Script Data DataTable -->
    <script>

        $(document).ready(function () {
            $('#table-data-mentah').DataTable({
                paging: false,
                searching: false,
                sort: false,
            });
        });
    </script>

    <!-- Scroll to Top Button
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    Bootstrap core JavaScript
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    Core plugin JavaScript
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    Custom scripts for all pages
    <script src="js/sb-admin-2.min.js"></script>

    Page level plugins
    <script src="vendor/chart.js/Chart.min.js"></script>

    Page level custom scripts
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> -->

    <!-- bootstrap data table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</body>

</html>