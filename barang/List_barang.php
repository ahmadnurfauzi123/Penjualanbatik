<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
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
                        <h3 class="page-head-line">Data Barang</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                           <?php echo anchor('Barang/Input_barang','Tambah data Barang');?>
                        </div>
                    </div>
                </div>
                
                <div class="row">
            <div class=" col-md-12">
                <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>photo</th>
                                        <th>Harga</th>
                                        <th>Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                
                                foreach ($barang as $b) {?>
                               
                                
                                     <tr>
                                        <td><?php echo $b->id_barang ?></td>
                                        <td><?php echo $b->nama_barang ?></td>
                                        <td><?php echo $b->photo ?></td>
                                        <td><?php echo $b->harga ?></td>
                                        <td><?php echo $b->id_kategori ?></td>
                                        
                                    </tr>
                                <?php } ?>
                                </tbody>
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
        &copy; 2015 YourCompany | By : <a href="" target="_blank">DesignBootstrap</a>
    </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
</body>
</html>
