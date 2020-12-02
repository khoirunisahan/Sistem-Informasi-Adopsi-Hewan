<?php
require_once "../_config/config.php";

if(isset($_POST['add'])){
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    mysqli_query($con, "INSERT INTO adopter(Nama, Alamat, Email) VALUE('$nama', '$alamat', '$email')") or die (mysqli_error($con));
    echo"<script>window.location='data.php'</script>";
} else if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    mysqli_query($con, "UPDATE adopter SET Nama='$nama', Alamat='$alamat', Email='$email' where Id_adopter ='$id'") or die (mysqli_error($con));
    echo"<script>window.location='data.php'</script>";
}
?>