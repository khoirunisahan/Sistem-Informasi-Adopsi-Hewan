<?php
require_once "../_config/config.php";

if(isset($_POST['add'])){
    $id_hewan = trim(mysqli_real_escape_string($con, $_POST['id_hewan']));
    $id_adopter = trim(mysqli_real_escape_string($con, $_POST['id_adopter']));
    $tgl_adopt = trim(mysqli_real_escape_string($con, $_POST['tgl_adopt']));
    mysqli_query($con, "INSERT INTO daftaradopsi(id_hewan, id_adopter, tgl_adopt) VALUE('$id_hewan', '$id_adopter', '$tgl_adopt')") or die (mysqli_error($con));
    echo"<script>window.location='data.php'</script>";
}  else if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $id_hewan = trim(mysqli_real_escape_string($con, $_POST['id_hewan']));
    $id_adopter = trim(mysqli_real_escape_string($con, $_POST['id_adopter']));
    $tgl_adopt = trim(mysqli_real_escape_string($con, $_POST['tgl_adopt']));
    mysqli_query($con, "UPDATE daftaradopsi SET id_hewan='$id_hewan', id_adopter='$id_adopter', tgl_adopt='$tgl_adopt' where id_daftar ='$id'") or die (mysqli_error($con));
    echo"<script>window.location='data.php'</script>";
}

?>