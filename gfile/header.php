
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo "$jlink/Terserah"; ?>/home.php">Halaman Alumni - Hai Alumni</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Akun <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo "$jlink/Terserah"; ?>/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo "$jlink/Terserah"; ?>/home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#profile"><i class="glyphicon glyphicon-user"> </i>  Profile </a>
                        <ul id="profile" class="collapse">
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/profile/view_profile.php">Lihat Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/profile/input_profile.php">Input Profile</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#riwayat_kerja"><i class="glyphicon glyphicon-briefcase"> </i>  Riwayat Kerja </a>
                        <ul id="riwayat_kerja" class="collapse">
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/RiwayatKerja/view_riwayat_kerja.php">Lihat Riwayat Kerja</a>
                            </li>
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/RiwayatKerja/input_riwayat_kerja.php">Input Riwayat Kerja</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#prestasi"><i class="glyphicon glyphicon-education"> </i>  Prestasi </a>
                        <ul id="prestasi" class="collapse">
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/Prestasi/view_prestasi.php">Lihat Prestasi</a>
                            </li>
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/Prestasi/input_prestasi.php">Input Prestasi</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#portofolio"><i class="glyphicon glyphicon-file"> </i>  Portofolio</a>
                        <ul id="portofolio" class="collapse">
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/portofolio/view_portofolio.php">Lihat Portofolio</a>
                            </li>
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/portofolio/input_portofolio.php">Input Portofolio</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#kerja_praktek"><i class="glyphicon glyphicon-briefcase"> </i>  Kerja Praktek </a>
                        <ul id="kerja_praktek" class="collapse">
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/KerjaPraktek/view_kerja_praktek.php">Lihat Kerja Praktek</a>
                            </li>
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/KerjaPraktek/input_kerja_praktek.php">Input Kerja Praktek</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#loker"><i class="glyphicon glyphicon-list-alt"> </i>  Loker </a>
                        <ul id="loker" class="collapse">
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/Loker/view_loker.php">Lihat Loker</a>
                            </li>
                            <li>
                                <a href="<?php echo "$jlink/Terserah"; ?>/Alumni/Loker/input_loker.php">Input Loker</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>