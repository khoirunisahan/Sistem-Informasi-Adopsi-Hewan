<?php include_once('../_header.php');
 ?>
    <div class ="box">
        <h1>Adopter<h1>
        <h4>
            <small>Edit Data Adopter</small>
                <div class="pull-right">                
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
        <h4>
            <div class="row">
            <div class ="col-lg-6 col-lg-offset-3">
                <?php
                $id = @$_GET['id'];
                $sql_hewan = mysqli_query($con, "SELECT * FROM hewan where id_hewan='$id'")or die(mysqli_error($con));
                $data = mysqli_fetch_array($sql_hewan);
                ?>
                <form action="proses.php" method="post">
                    <div class = "form-group">
                        <label for="jenis">Jenis</label>
                        <input type ="hidden" name="id" value="<?=$data['id_hewan']?>">
                        <input type="text" name="jenis" id="jenis" value="<?=$data['jenis']?>" class="form-control" required autofocus>
                    </div>
                    <div class = "form-group">
                        <label for="ras">Ras</label>
                        <input type="text" name="ras" id="ras" value="<?=$data['ras']?>" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="warna">Warna</label>
                        <input type="text" name="warna" id="warna" value="<?=$data['Warna']?>" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="cacat">Cacat</label>
                        <input type="text" name="cacat" id="cacat" value="<?=$data['cacat']?>" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="tgl_rescue">Tgl Rescue</label>
                        <input type="date" name="tgl_rescue" id="tgl_rescue" value="<?=$data['tgl_rescue']?>" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="id_shelter">Id Shelter</label>
                        <input type="int" name="id_shelter" id="id_shelter" value="<?=$data['id_shelter']?>" class="form-control">
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="edit" value="simpan" class="btn btn-success">
                    </div>
                </form>
            </div>    
        </div>
    </div>
    
<?php include_once('../_footer.php');?>