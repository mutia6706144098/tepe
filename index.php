<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hai Alumni</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="asset/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset/css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img width="50px" height="50px" src="asset/img/portfolio/logo3.jpg">
                <a class="navbar-brand page-scroll" href="#page-top">Hai Alumni</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#">Home</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#data_alumni">Data Alumni</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Info Loker</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>HAI ALUMNI </h1>
                <h1> D3 TEKNIK INFORMATIKA</h1>
                <hr>
                <p>Connecting to Alumni</p>
                <a href="" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section id="data_alumni">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Temukan Alumni</h2>
                    <hr class="primary">
                    <form class="form-inline">
                      <div class="form-group">
                        
                        <div class="input-group">
                          <div class="input-group-addon"></div>
                          <input type="text" class="form-control" id="search" placeholder="Masukkan kata kunci">
                          <div class="input-group-addon"></div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-info">Cari</button>
                      <br>

                      <!---------------Radio Button------------>

                        <label class="radio-inline">
                            <input type="radio" name="searchBy" id="searchBy" value="byId" default> ID
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="searchBy" id="searchBy" value="byName"> Nama
                        </label>
                        

                      <!-- --------------------------------- -->

                      <br><br><br>
                      <center>
                      <table border="1"> 
                      <!-- Letakkan script PHP  di sini -->
                        <tr><th>Id</th><th>Name</th></tr>
                        <tr><td>12345</td><td>Bhagas Adhi N</td></tr>
                        <tr><td>23456</td><td>Abdillah Hidayatullah</td></tr>
                        <tr><td>34567</td><td>Ivan Yuliansyah</td></tr>
                        <tr><td>45678</td><td>Amoro Pambayun</td></tr>
                        <tr><td>56789</td><td>Primadita Banu A</td></tr>
                    </table>
                        </center>

                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Hai Alumni menyediakan semua informasi yang kalian butuhkan tentang Alumni D3 teknik Informatika, Telkom University</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>0800-0000-1111</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@pitu.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="asset/js/jquery.easing.min.js"></script>
    <script src="asset/js/jquery.fittext.js"></script>
    <script src="asset/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="asset/js/creative.js"></script>

</body>

</html>
<!-- Script for live search   -->

<script type="text/javascript">
    $("#search").on("keyup", function() {
        var value = $(this).val();


        $("table tr").each(function(index) {
            if (index !== 0) {
                
                $row = $(this);
                var id = $row.find("td:nth-child(2)").text();

                if (id.indexOf(value) !== 0) {
                    $row.hide();
                }
                else {
                    $row.show();
                }
            }
        });
    });
</script>
