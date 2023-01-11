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


    <link rel="stylesheet" href="css/style.css">

    <!-- Script untuk bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Script DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

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

    <!-- Script untuk bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

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
                <li class=""><a href="index.php" class="text-decoration-none px-3 py-2 d-block">Home</a></li>
                <li class=""><a href="halaman_rumus/normalisasi.php"
                        class="text-decoration-none px-3 py-2 d-block">Rumus</a></li>
                <li class="active"><a href="perangkingan.php"
                        class="text-decoration-none px-3 py-2 d-block">Ranking</a>
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
                <a style="font-size: 2rem;">Ranking</a>

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
            <div class="container-fluid">

                <!-- Page Heading -->
                <!-- <div class="d-sm-flex align-items-center justify-content-center mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Ranking</h1>
                </div> -->

                <!-- Content Row -->
                <div class="row" style="margin: 20px;">
                    <table class="table table-striped p-5">
                        <thead>
                            <tr>
                                <th scope="col">Ranking</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <!-- Hapus Nanti -->
                                <th scope="col">Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("connection.php");

                            // $search_term = 'izzi';
                            // $pattern = '/' . preg_quote($search_term, '/') . '/i';
                            
                            // echo $pattern;
                            
                            // nampilin data dari database
                            $query = "SELECT * FROM rank_tb";
                            // $query = "SELECT * FROM ranking_casis WHERE id LIKE '%$search_term%' OR nama LIKE '%$search_term%'";
                            $hasil = mysqli_query($con, $query);

                            $i = 1;
                            if (mysqli_num_rows($hasil) > 0) {
                                // The query returned at least one row
                                // Loop through the result set and process the rows
                                while ($row = mysqli_fetch_array($hasil)) {
                                    $id = $row['id'];
                                    $nama = $row['nama'];
                                    //Hapus Nanti
                                    $score = $row['score'];
                                    // $id = preg_replace($pattern, '<span class="nyala">$0</span>', $id); 
                                    // $nama = preg_replace($pattern, '<span class="nyala">$0</span>', $nama);
                                    echo "<tr><td>" . $i++ . "</td>";
                                    echo "<td>" . $id . "</td>";
                                    echo "<td>" . $nama . "</td>";
                                    // Hapus Nanti
                                    echo "<td>" . $score . "</td>";
                                }
                            } else {
                                // The query did not return any rows
                                echo 'No matching rows found';
                            }

                            ?>
                        </tbody>
                    </table>
                    <!-- /.container-fluid -->

                    <input type="submit" class="button" name="update" value="Update" />

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- bootstrap data table -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</body>


</html>

<script>
    $(document).ready(function () {
        $('.button').click(function () {
            var clickBtnValue = $(this).val();
            var ajaxurl = 'ajax.php',
                data = { 'action': clickBtnValue };
            $.post(ajaxurl, data, function (response) {
                // Response div goes here.
                alert("Berhasil Terupdate");
                location.reload()
            });
        });
    });
</script>