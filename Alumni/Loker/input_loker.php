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
        <div class="panel-heading"> Profile </div>
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
                            $judul=$_POST['judul'];
                            $keterangan=$_POST['keterangan'];
                       
                           
                       
                                $insertalumni="INSERT INTO tb_loker (judul,keterangan) VALUES ('".$judul."','".$keterangan."')";
                                
                                $addalumni=mysql_query($insertalumni, $koneksi);
                                $sukses="Berhasil ditambahkan!";
                                echo "$sukses";
                            

                        }
                    ?>
<form method="POST" action="">
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="nama_depan">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Loker" required>
  </div>
  </div>
</div>
<div class="row">
 <div class="col-md-6">
    <div class="form-group">
    <label for="nama">Keterangan</label>
   <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Tulis Keterangan" required></textarea>
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
