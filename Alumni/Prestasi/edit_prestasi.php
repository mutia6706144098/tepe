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
          
         
            $id=$_GET['id'];

            $sql= "Select * from tb_prestasi where id_prestasi=$id";
            $result = mysql_query($sql);
            $hasil = mysql_result($result,0);
        ?>
    <div class="row">
    
    <div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading"> Prestasi </div>
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

          
     
<form method="POST" action="">
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="nama_depan">Prestasi</label>
    <input type="text" class="form-control" id="prestasi" name="prestasi" placeholder="Prestasi yang sudah Anda raih" value="<?php echo $hasil['nama_prestasi']; ?>" required>
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
