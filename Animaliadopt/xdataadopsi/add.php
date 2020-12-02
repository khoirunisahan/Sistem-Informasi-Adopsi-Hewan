<?php include_once('../_header.php');
 ?>
    <div class ="box">
        <h1>Shelter<h1>
        <h4>
            <small>Tambah Data Shelter</small>
                <div class="pull-right">                
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            <h4>
            <div class="row">
            <div class ="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                    <div class = "form-group">
                        <label for="id_hewan">Id Hewan</label>
                        <input type="text" name="id_hewan" id="id_hewan" class="form-control" required autofocus>
                    </div>
                    <div class = "form-group">
                        <label for="id_adopter">Id Adopter</label>
                        <input type="text" name="id_adopter" id="id_adopter" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="tgl_adopt">Tanggal Adopsi</label>
                        <input type="date" name="tgl_adopt" id="tgl_adopt" class="form-control">
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="add" value="simpan" class="btn btn-success">
                    </div>
                </form>
            </div>    
        </div>
    </div>
<?php include_once('../_footer.php');?>