<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?=base_url();?>assets/images/riau.ico">

        <title>SIPJUH</title>
        <!--Footable-->
        <link href="<?=base_url();?>assets/plugins/footable/css/footable.core.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?=base_url();?>assets/plugins/morris/morris.css">

        <link href="<?=base_url();?>assets/plugins/custombox/css/custombox.css" rel="stylesheet">

        <link href="<?=base_url();?>assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="<?=base_url();?>assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="<?=base_url();?>assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="<?=base_url();?>assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="<?=base_url();?>assets/js/modernizr.min.js"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>->>
                        <!-- Image Logo here -->
                        <a href="<?=base_url('HomeController');?>" class="logo">
                            <i class="icon-c-logo"> <img src="<?=base_url();?>assets/images/a.jpg" height="42"/> </i>
                            <span><img src="<?=base_url();?>assets/images/a.jpg" height="29" width="40"/></span>
                        </a>
                    </div>
                </div>

                
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <!-- geser-->
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <!-- geser-->

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profil waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><i class="ti-user m-r-10 text-inverse"></i> </a>
                                    <ul class="dropdown-menu">
                                        <!--<li><a href="#ubahpassword<?php echo $this->session->userdata('id') ?>" data-toggle="modal"><i class="ti-lock m-r-10 text-danger"></i> Ubah Password</a></li>
                                        <li class="divider"></li>-->
                                        <li><a href="<?=base_url('LoginController/logout');?>"><i class="ti-power-off m-r-10 text-danger"></i> Logout </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu" >
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">

                    <!--- ADMIN -->
                    <?php if ($this->session->userdata('level') == "1" ) {?>
                    <ul>
                        <li>
                            <a href="<?=base_url('HomeController');?>" class="waves-effect"><i class="ti-home"></i> <span> Home </span></a>
                        </li>

                        <li>
                            <a href="<?=base_url('DataPenggunaController');?>" class="waves-effect"><i class="ti-server"></i> <span> Data Pengguna </span></a>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-receipt"></i> <span> Data Paket </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?=base_url('PaketUmrohController');?>" class="waves-effect"> Paket Umroh </a></li>
                                <li><a href="<?=base_url('PaketHajiController');?>" class="waves-effect"> Paket Haji </a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="waves-effect"><i class="ti-clipboard"></i> <span> Pelaporan </span></a>
                        </li>
                    </ul>
                    <?php } ?>

                    <!--- STAFF  -->
                    <?php if ($this->session->userdata('level') == "2" ) {?>
                    <ul>
                        <li>
                            <a href="<?=base_url('HomeController');?>" class="waves-effect"><i class="ti-home"></i> <span> Home </span></a>
                        </li>

                        <li>
                            <a href="<?=base_url('PendaftaranUmrohController');?>" class="waves-effect"><i class="ti-flag"></i> <span> Pendaftaran Umroh </span></a>
                        </li>

                        <li>
                            <a href="<?=base_url('PendaftaranHajiController');?>" class="waves-effect"><i class="ti-flag-alt"></i> <span> Pendaftaran haji </span></a>
                        </li>
                    </ul>
                    <?php } ?>

                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <?php echo $contents;?>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?=base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/js/detect.js"></script>
        <script src="<?=base_url();?>assets/js/fastclick.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.blockUI.js"></script>
        <script src="<?=base_url();?>assets/js/waves.js"></script>
        <script src="<?=base_url();?>assets/js/wow.min.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?=base_url();?>assets/plugins/peity/jquery.peity.min.js"></script>

        <script src="<?=base_url();?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="<?=base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="<?=base_url();?>assets/pages/jquery.form-advanced.init.js"></script>
        

        <!-- jQuery  -->
        <script src="<?=base_url();?>assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="<?=base_url();?>assets/plugins/counterup/jquery.counterup.min.js"></script>



        <script src="<?=base_url();?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/raphael/raphael-min.js"></script>

        <script src="<?=base_url();?>assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="<?=base_url();?>assets/pages/jquery.dashboard.js"></script>

        <script src="<?=base_url();?>assets/js/jquery.core.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.app.js"></script>

        <!-- data tabel -->
        <script src="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <script src="<?=base_url();?>assets/pages/datatables.init.js"></script>

        <!--FooTable-->
        <script src="<?=base_url();?>assets/plugins/footable/js/footable.all.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

        <!--FooTable Example-->
        <script src="<?=base_url();?>assets/pages/jquery.footable.js"></script>


        <!-- Modal-Effect -->
        <script src="<?=base_url();?>assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/custombox/js/legacy.min.js"></script>

        <script src="<?=base_url();?>assets/pages/datatables.editable.init.js"></script>


        <script type="text/javascript" src="<?=base_url();?>assets/plugins/parsleyjs/parsley.min.js"></script>

        <!-- form advance -->
        <script src="<?=base_url();?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="<?=base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="<?=base_url();?>assets/pages/jquery.form-advanced.init.js"></script>

        <!-- Examples -->
        <script src="<?=base_url();?>assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script> 
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?=base_url();?>assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="<?=base_url();?>assets/plugins/tiny-editable/numeric-input-example.js"></script>

        <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "<?=base_url();?>assets/plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "400px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();
        </script>
    </body>
</html>