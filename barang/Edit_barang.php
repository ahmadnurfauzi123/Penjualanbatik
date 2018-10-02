<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet" type="text/css" />
    <!--CUSTOM STYLES-->
    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet" type="text/css" />
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand">Halaman Admin 

                </a>
            </div>

            <div class="notifications-wrapper">
            <ul class="nav">
            </ul>
               
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                        <img src="<?php echo base_url().'assets/img/IMG_20170625_093528.jpg'?>" class="img-circle" />

                           
                        </div>

                    </li>
                     <li>
                      <a><strong>Admin</strong></a>
                    </li>

                    <li>
                        <a class="active-menu"  href="index.html">Dashboard</a>
                    </li>
                    <li>
                        <a href="ui.html">UI Elements </a>
                        
                    </li>
                    
                    <li>
                        <a href="table.html">Data Tables </a>
                        
                    </li>
                     
                     <li>
                        <a href="forms.html"></i>Forms</a>
                    </li>
                
                    <li>
                        <a href="blank.html"><i class="fa fa-dashcube "></i>Blank Page</a>
                    </li>
                   
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-head-line">Form Barang</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                           <?php echo anchor('Barang/List_barang','Data Barang');?>
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
            <div class=" col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                          <form method="post" action="input">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <tr>
                                <td>Nama Barang</td>
                                <td><input type="text" name="nama_barang" required=""></td>
                              </tr>
                              <tr>
                                <td>Photo</td>
                                <td><input type="file" name="photo" required=""></td>
                              </tr>
                              <tr>
                                <td>Harga</td>
                                <td><input type="number" name="harga"></td>
                              </tr>
                              <tr>
                                <td>Kategori</td>
                                <td><input type="text" name="id_Kategori"></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td><input type="Submit" value="Simpan"></td>
                              </tr>
                        </table>
                     </table>                        
                </div>
          
            </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
        </div>
    <!-- /. WRAPPER  -->
    <footer >
        &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
    </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
</body>
</html>
