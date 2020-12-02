<?php include_once('../_header.php');
 ?>
    <div class ="box">
        <h1>Shelter<h1>
        <h4>
            <small>Edit Data Shelter</small>
                <div class="pull-right">                
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            <h4>
            <div class="row">
            <div class ="col-lg-6 col-lg-offset-3">
                <?php
                $id = @$_GET['id'];
                $sql_shelter = mysqli_query($con, "SELECT * FROM shelter where id_shelter='$id'")or die(mysqli_error($con));
                $data = mysqli_fetch_array($sql_shelter);
                ?>
                <form action="proses.php" method="post">
                    <div class = "form-group">
                        <label for="nama">Nama</label>
                        <input type ="hidden" name="id" value="<?=$data['id_shelter']?>">
                        <input type="text" name="nama" id="nama" value="<?=$data['nama']?>" class="form-control" required autofocus>
                    </div>
                    <div class = "form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="<?=$data['alamat']?>" class="form-control">
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="edit" value="simpan" class="btn btn-success">
                    </div>
                </form>
            </div>    
        </div>
    </div>
    
<?php include_once('../_footer.php');?>