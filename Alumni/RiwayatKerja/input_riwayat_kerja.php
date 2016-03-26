<!DOCTYPE html>
<html lang="en">

<head>
<?php

    include_once('../../gfile/head.php');
?>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php
            include_once('../../gfile/header.php');
            include_once('../../gfile/database.php');
          
         
            /*function getbyid($u)
            {
                $sql = "SELECT * FROM tb_alumni WHERE username = $u";
                return mysql_query($sql);
            }
            $id = $_GET['id'];
            $u=$id;
            $dbresult = getbyid($u);
            $data = mysql_fetch_assoc($dbresult);
            */
            

            $all='SELECT * FROM tb_alumni';
            $ghina=mysql_query($all, $koneksi);
        ?>
    <div class="row">
    
    <div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading"> Riwayat Kerja </div>
        <div class="panel-body">
        <!--
            <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label"> Nomor Induk Mahasiswa (NIM) </label>
                            <p class="form-control-static"> <?php echo $data['id'] ?> </p>
                            <input type="hidden" name="id" id="id" value="<?php echo $data['id'] ?>" />
                        </div>
                        <button type="submit" class="btn btn-danger"> <i class=""></i> Update Profile </button>
                    </div>
            </div> <!--row -->
      <?php
                        $error1="";
                        $sukses="";
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $nama=$_POST['nama'];
                            $bidang=$_POST['bidang'];
                            $deskripsi=$_POST['desk'];
                            $jabatan=$_POST['jabatan'];
                            $cerita=$_POST['cerita'];
                    
                       
                                $insertalumni="INSERT INTO tb_riwayat_kerja (nama_perusahaan,bidang,deskripsi,jabatan,cerita) VALUES ('".$nama."','".$bidang."','".$deskripsi."','".$jabatan."','".$cerita."')";
                                
                                $addalumni=mysql_query($insertalumni, $koneksi);
                                $sukses="Berhasil ditambahkan!";
                                echo "$sukses";
                            

                        }
                    ?>
<form method="POST" action="">
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="nama">Nama Perusahaan</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Perusahaan" required>
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="bidang">Bidang</label>
    <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Bidang" required>
  </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="desk">Deskripsi Perusahaan</label>
    <input type="text" class="form-control" id="desk" name="desk"  placeholder="Deskripsi Perusahaan" required>
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="jabatan">Jabatan</label>
    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
  </div>
  </div>
</div>
<div class="row">
 <div class="col-md-6">
    <div class="form-group">
    <label for="nama">Cerita</label>
   <textarea class="form-control" id="cerita" name="cerita" placeholder="Cerita" required></textarea>
  </div>
  </div>
</div>
  <div class="row">
    <div class="col-md-6" align="center">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>

  </form>

        </div>
    </div>

    </div>
</div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../../asset/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../asset/js/bootstrap.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="../../asset/js/plugins/morris/raphael.min.js"></script>
    <script src="../../asset/js/plugins/morris/morris.min.js"></script>
    <script src="../../asset/js/plugins/morris/morris-data.js"></script>
</body>
</html>
