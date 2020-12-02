<?php
require_once "../_config/config.php";

if(isset($_POST['add'])){
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    mysqli_query($con, "INSERT INTO shelter(nama, alamat) VALUE('$nama', '$alamat')") or die (mysqli_error($con));
    echo"<script>window.location='data.php'</script>";
} else if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    mysqli_query($con, "UPDATE shelter SET nama='$nama', alamat='$alamat' where id_shelter ='$id'") or die (mysqli_error($con));
    echo"<script>window.location='data.php'</script>";
}
?>