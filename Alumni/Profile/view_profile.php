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

            $all='SELECT * FROM tb_alumni';
            $ghina=mysql_query($all, $koneksi);
        ?>
    <div class="row">
    <div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading"> Profile </div>
        <div class="panel-body">
        
            <?php
                           
                                $hapusalumni="DELETE from tb_alumni where username='username'";
                                $deletealumni=mysql_query($hapusalumni, $koneksi);

                        
                    ?>

            <table class="table table-striped table-hover no-margn">
                <thead>
                    <tr>
                        <th> NIM </th>
                        <th> Nama </th>
                        <th class="text-center"> <i class="fa fa-cog"></i> </th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysql_fetch_array($ghina, MYSQL_ASSOC)){?>
                <tr>
                    <td> <?=$row['username']?> </td>
                    <td> <?=$row['password']?> </td>
                    <td>
                        <a href="#" class="btn btn-xs btn-primary"> <i class="fa fa-pencil"></i> </a>
                        <a href="#" class="btn btn-xs btn-info"> <i class="fa fa-search"></i> </a>
                        <button type="button" onclick="#" class="btn btn-xs btn-danger"> <i class="fa fa-remove"></i> </button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
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
