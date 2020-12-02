<?php
require_once "../_config/config.php";

if(isset($_POST['add'])){
    $id_hewan = trim(mysqli_real_escape_string($con, $_POST['id_hewan']));
    $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
    $ras = trim(mysqli_real_escape_string($con, $_POST['ras']));
    $warna = trim(mysqli_real_escape_string($con, $_POST['warna']));
    $cacat = trim(mysqli_real_escape_string($con, $_POST['cacat']));
    $tgl_rescue = trim(mysqli_real_escape_string($con, $_POST['tgl_rescue']));
    $id_shelter = trim(mysqli_real_escape_string($con, $_POST['id_shelter']));
    mysqli_query($con, "INSERT INTO hewan(id_hewan,jenis,ras,Warna,cacat,tgl_rescue,id_shelter) VALUE('$id_hewan', '$jenis', '$ras','$warna', '$cacat','$tgl_rescue', '$id_shelter')") or die (mysqli_error($con));
    echo"<script>window.location='data.php'</script>";
} else if(isset($_POST['edit'])){
    $id = $_POST['id'];     
    $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
    $ras = trim(mysqli_real_escape_string($con, $_POST['ras']));
    $warna = trim(mysqli_real_escape_string($con, $_POST['warna']));
    $cacat = trim(mysqli_real_escape_string($con, $_POST['cacat']));
    $tgl_rescue = trim(mysqli_real_escape_string($con, $_POST['tgl_rescue']));
    $id_shelter = trim(mysqli_real_escape_string($con, $_POST['id_shelter']));
    mysqli_query($con, "UPDATE hewan SET jenis='$jenis', ras='$ras', Warna='$warna', 
    cacat='$cacat', tgl_rescue='$tgl_rescue', id_shelter='$id_shelter' WHERE id_hewan='$id'") or die (mysqli_error($con));
    echo"<script>window.location='data.php'</script>";
}
?>