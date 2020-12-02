<?php
require_once "_config/config.php";
if(!isset($_SESSION ['user'])){
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistem Informasi Animali Adopt</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('Assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('Assets/css/simple-sidebar.css');?>" rel="stylesheet">
</head>
<body>
    <script src="<?=base_url('Assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('Assets/js/bootstrap.min.js')?>"></script>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#"><span class="text-primary"><b>Animali Adopt</b></span></a>
                </li>
                <li>
                    <a href="../dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="../xhewan/data.php">Data Hewan</a>
                </li>
                <li>
                    <a href="../xadopter/data.php">Data Adopter</a>
                </li>
                <li>
                    <a href="../xshelter/data.php">Data Shelter</a>
                </li>
                <li>
                    <a href="../xdataadopsi/data.php">Data Adopsi</a>
                </li>
                <li>
                    <a href="../xdaftarlengkap/data.php">Data Lengkap</a>
                </li>
                <li>
                    <a href="../xshelterhewan/data.php">Shelter Hewan</a>
                </li>                
                <li>
                    <a href="../auth/logout.php"><span class="text-danger">Logout</span></a>
                </li>               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
        