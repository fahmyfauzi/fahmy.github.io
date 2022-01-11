<?php

$con = mysqli_connect("localhost", "root", "", "db_cv");
$Nik = $_GET['NIK'];

mysqli_query($con, "DELETE FROM tbl_identitas Where nik='$Nik'");
mysqli_query($con, "DELETE FROM tbl_detail_pendidikan Where nik='$Nik'");
mysqli_query($con, "DELETE FROM tbl_detail_pekerjaan Where nik='$Nik'");
mysqli_query($con, "DELETE FROM tbl_detail_keahlian Where nik='$Nik'");
mysqli_query($con, "DELETE FROM tbl_detail_galery Where nik='$Nik'");
header("location:../index.php");
