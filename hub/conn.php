<?php

date_default_timezone_set('Asia/Jakarta');
$conn = mysqli_connect("localhost", "smkp2748_ppdb-3", "hhEW?=ikp1Wg", "smkp2748_ppdb-3");
//$conn = mysqli_connect('localhost', 'root', '', 'ppdb_22');

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
