<?php
if (isset($_POST['action'])) {
    select();
}

function select() {
    include("connection.php");
    include("topsis.php");

    // run query
    $query = "SELECT * FROM data_mentah";
    $hasil = mysqli_query($con, $query);

    // set array
    // $nama = array();
    // $nilai_tertulis = array();
    // $nilai_raport = array();
    // $prestasi_internasional = array();
    // $prestasi_nasional  = array();
    // $prestasi_lokal  = array();
    // $skbn  = array();
    // $cek_fisik  = array();
    // $skck  = array();

    $casis = array();

    // look through query
    while ($row = mysqli_fetch_array($hasil)) {
        //add each row returned into an array
        $casis[] = [
            $row['id'],
            $row['nama'],
            $row['sekolah'],
            $row['tanggungan'],
            $row['penghasilan'],
            $row['status']
        ];
    }

    $result = array();
    $result = topsis($casis);
    $counter = 1;
    foreach ($result as $row) {
        $nama = $row[0];
        $score = $row[1];
        $id = 'RCH' . sprintf("%04d", $counter) . strtoupper(substr($nama, 0, 3));
        $counter++;
        // Masukkin ke database
        $sql = "INSERT INTO rank_tb (id, nama, score) VALUES ('$id', '$nama', '$score')";
        mysqli_query($con, $sql);
    }

    mysqli_close($con);
    exit;
}
?>