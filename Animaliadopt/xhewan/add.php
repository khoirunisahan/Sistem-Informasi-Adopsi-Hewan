<?php include_once('../_header.php');
 ?>
    <div class ="box">
        <h1>Hewan<h1>
        <h4>
            <small>Tambah Data Hewan</small>
                <div class="pull-right">                
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            <h4>
            <div class="row">
            <div class ="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                    <div class = "form-group">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" id="jenis" class="form-control" required autofocus>
                    </div>
                    <div class = "form-group">
                        <label for="Ras">Ras</label>
                        <input type="text" name="ras" id="ras" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="warna">Warna</label>
                        <input type="text" name="warna" id="warna" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="cacat">Cacat</label>
                        <input type="text" name="cacat" id="cacat" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="tgl_rescue">Tanggal Rescue</label>
                        <input type="date" name="tgl_rescue" id="tgl_rescue" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="id_shelter">Id Shelter</label>
                        <input type="text" name="id_shelter" id="id_shelter" class="form-control">
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="add" value="simpan" class="btn btn-success">
                    </div>
                </form>
            </div>    
        </div>
    </div>
<?php include_once('../_footer.php');?>