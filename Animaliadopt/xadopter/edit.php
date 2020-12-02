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
                $sql_adopter = mysqli_query($con, "SELECT * FROM adopter where Id_adopter='$id'")or die(mysqli_error($con));
                $data = mysqli_fetch_array($sql_adopter);
                ?>
                <form action="proses.php" method="post">
                    <div class = "form-group">
                        <label for="nama">Nama</label>
                        <input type ="hidden" name="id" value="<?=$data['Id_adopter']?>">
                        <input type="text" name="nama" id="Nama" value="<?=$data['Nama']?>" class="form-control" required autofocus>
                    </div>
                    <div class = "form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="jenis" value="<?=$data['Alamat']?>" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="jenis" value="<?=$data['Email']?>" class="form-control">
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="edit" value="simpan" class="btn btn-success">
                    </div>
                </form>
            </div>    
        </div>
    </div>
    
<?php include_once('../_footer.php');?>