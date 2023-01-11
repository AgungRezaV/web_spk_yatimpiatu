<?php
include("../connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="../tabel.js"></script>

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

    <link rel="stylesheet" href="../css/style.css">

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
                <li class=""><a href="../index.php" class="text-decoration-none px-3 py-2 d-block">Home</a></li>
                <li class="active"><a href="rumus.php" class="text-decoration-none px-3 py-2 d-block">Rumus</a></li>
                <li class=""><a href="../perangkingan.php" class="text-decoration-none px-3 py-2 d-block">Ranking</a>
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
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="normalisasi.php">Normalisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ternormalisasi.php">Ternormalisasi Terbobot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Solusi Ideal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jarak.php">Jarak Solusi Ideal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="preferensi.php">Preferensi</a>
                </li>
            </ul>
            <!-- <nav class="navbar bg-dark shadow p-3 mb-5 bg-white rounded" id="navbar">
                <a style="font-size: 2rem;">Rumus</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </nav> -->
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="shadow p-3 mb-5 bg-white rounded">
                <h2><b>Penyelesaian masalah MADM dengan TOPSIS:</b></h2>
                <h4>
                    <ol type="1">
                        <li>Membuat matriks keputusan yang ternormalisasi</li>
                        <li>Membuat matriks keputusan yang ternormalisasi terbobot</li>
                        <b>
                            <li>Menentukan matriks solusi ideal positif & matriks solusi ideal negatif</li>
                        </b>
                        <li>Menentukan jarak antara nilai setiap alternatif dengan matriks solusi ideal positif &
                            matriks
                            solusi ideal negatif</li>
                        <li>Menentukan nilai preferensi untuk setiap alternatif.</li>
                    </ol>
                </h4>
            </div>

            <div id="sip-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                <h1 style="text-align: center;">Solusi Ideal Positif</h1>
                <p>Dikarenakan semua kriteria yang digunakan merupakan kriteria manfaat,
                    maka solusi ideal positif pada penelitian ini merupakan kombinasi nilai
                    terbesar pada setiap aspek penilaian dari matriks y. Berikut adalah formula untuk
                    mencari A
                    +
                    :</p>
                <div class="row" style="margin: 20px;">
                    <!-- Rumus normalisasi dengan MathJax -->
                    <!-- <h2>Rumus untuk Normalisasi = </h2> -->
                    <div id="formula-normalisasi" style="overflow-x:auto;">
                        Rumus untuk Solusi Ideal Positif : $$ {A^{+}=(y_1^+),(y_2^+),(y_3^+),(y_4^+),(y_n^+)}$$
                    </div>
                    <div>
                        <ul>
                            <li>A+ = Matriks keputusan ternormalisasi terbobot</li>
                            <li>n = banyaknya kolom</li>
                        </ul>
                    </div>
                    <div style="padding-left: 20px;">
                    </div>
                    <!-- /.container-fluid -->

                </div>

                Maka matriks Solusi Ideal Positif adalah sebagai berikut :

                <div class="row" style="margin: 20px;">
                    <div class="column">
                        $$ {
                        A^{+}=\left(\begin{array}{c}
                        y_1^+,y_2^+,y_3^+,y_4^+,y_n^+
                        \end{array}\right)
                        } $$
                    </div>
                </div>
                <table id="tabel_ideal1" class="display hover" width="100%"></table>
                <script>
                    js_ideal1();
                </script>
            </div>

            <div id="sin-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                <h1 style="text-align: center;">Solusi Ideal Negatif</h1>
                <p>Dikarenakan semua kriteria yang digunakan merupakan kriteria manfaat,
                    maka solusi ideal positif pada penelitian ini merupakan kombinasi nilai
                    20
                    terkecil pada setiap aspek penilaian dari matriks Y. Berikut adalah formula
                    untuk mencari A
                    -
                    :
                </p>
                <div class="row" style="margin: 20px;">
                    <!-- Rumus normalisasi dengan MathJax -->
                    <!-- <h2>Rumus untuk Normalisasi = </h2> -->
                    <div id="formula-normalisasi" style="overflow-x:auto;">
                        Rumus untuk Solusi Ideal Positif : $$ {A^{-}=(y_1^-),(y_2^-),(y_3^-),(y_4^-),(y_n^-)}$$
                    </div>
                    <div>
                        <ul>
                            <li>A- = Matriks keputusan ternormalisasi terbobot</li>
                            <li>n = banyaknya kolom</li>
                        </ul>
                    </div>
                    <div style="padding-left: 20px;">
                    </div>

                    <!-- /.container-fluid -->

                </div>

                Maka matriks Solusi Ideal Positif adalah sebagai berikut :

                <div class="row" style="margin: 20px;">
                    <div class="column">
                        $$ {
                        A^{-}=\left(\begin{array}{c}
                        y_1^-,y_2^-,y_3^-,y_4^-,y_n^-
                        \end{array}\right)
                        } $$
                    </div>
                </div>
                <table id="tabel_ideal2" class="display hover" width="100%"></table>
                <script>
                    js_ideal2();
                </script>
                <script>
                    // js_terbobot();
                </script>
            </div>
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

    <!-- Script Data DataTable -->
    <script>
        $(document).ready(function () {
            $('#table-data-normalisasi').DataTable();
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