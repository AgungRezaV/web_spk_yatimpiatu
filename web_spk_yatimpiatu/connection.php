<?php
$con = mysqli_connect("localhost", "root", "", "db_spk_yatim");

if(!$con) {
    echo "Koneksi gagal";
    die();
}
?>