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
            $kristi=mysql_query($all, $koneksi);
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
                            $username=$_POST['nama_depan'];
                            $password=$_POST['nama_belakang'];
                            $nama=$_POST['tempat_lahir'];
                            //cek alumni
                            $inialumni=mysql_query("SELECT * FROM tb_alumni WHERE username='".$username."'");
                            $dataalumni=mysql_fetch_array($inialumni);
                            if(!$dataalumni){
                       
                                $insertalumni="INSERT INTO tb_alumni (username,password,nama) VALUES ('".$username."','".$password."','".$nama."')";
                                
                                $addalumni=mysql_query($insertalumni, $koneksi);
                                $sukses="Berhasil ditambahkan!";
                                echo "$sukses";
                            }else{
                                $error1="Sudah ada";
                                echo "$error1";         
                            }

                        }
                    ?>
      <div class="row">
        <div class="col-md-3">
                <a class="thumbnail">
                  <img src="../../asset/img/portfolio/1.jpg" alt="...">
                </a>
              
          </div>
          <div class="col-md-9">
            <form method="POST" action="">
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="nama_depan">Nama depan</label>
    <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Nama Depan" required>
  </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
    <label for="nama_belakang">Nama Belakang</label>
    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" required>
  </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label for="tempat_lahir">Tempat Lahir</label>
    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"  placeholder="Tempat Lahir" required>
  </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
  </div>
  </div>
</div>
<div class="row">
<div class="col-md-6">
    <div class="form-group">
    <label for="angkatan">Angkatan</label>
    <input type="text" class="form-control" id="angkatan" placeholder="Angakatan">
  </div>
  </div>
  </div>
  <div class="row">
<div class="col-md-6">
    <div class="form-group">
    <label for="No_hp">No. HP</label>
    <input type="text" class="form-control" id="No_hp" placeholder="No. HP">
  </div>
  </div>
  </div>
  <div class="row">
<div class="col-md-6">
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email">
  </div>
  </div>
  </div>
  <div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-5" >
      <button type="submit" class="btn btn-success">Submit</button>

    </div>
  </div>

  </form>


          </div>

      </div>


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
