<?php include_once('../_header.php');
 ?>
    <div class ="box">
        <h1>Adopter<h1>
        <h4>
            <small>Tambah Data Adopter</small>
                <div class="pull-right">                
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            <h4>
            <div class="row">
            <div class ="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                    <div class = "form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="id_hwn" class="form-control" required autofocus>
                    </div>
                    <div class = "form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="jenis" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="warna" class="form-control">
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="add" value="simpan" class="btn btn-success">
                    </div>
                </form>
            </div>    
        </div>
    </div>
<?php include_once('../_footer.php');?>