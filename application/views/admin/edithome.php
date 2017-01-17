<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <title>BluePen</title>

        <link href="assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
        <!-- App css -->

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css"


            <!-- <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css"> -->

        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/custom.site.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->




    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index-2.html" class="logo"><span>Blue<span>Pen</span></span><i class="zmdi zmdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title"></h4>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">



                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul>
                            <li class="text-muted menu-title"><strong>Modules</strong></li>

                            <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/user" class="waves-effect"><i class="zmdi zmdi-odnoklassniki"></i> <span> User Management </span> </a>
                            </li>

                             <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/group" class="waves-effect "><i class="zmdi zmdi-accounts"></i> <span> Group Management </span> </a>
                            </li>

                            <li class="text-muted menu-title"><strong>Site Management</strong></li>

                            <li>
                                <a href="view-sites.html" class="waves-effect "><i class="zmdi zmdi-globe-alt"></i> <span> View Sites </span> </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/edithome" class="waves-effect active"><i class="zmdi zmdi-home"></i> <span> Edit Homepage </span> </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/upload" class="waves-effect"><i class="zmdi zmdi-upload"></i> <span> Monthly Upload </span> </a>
                            </li>





                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                         <div class="row ">
                            <div class="col-sm-12 ">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="dropdown pull-right">
                                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Reset Filter</a></li>
                                            </ul>
                                        </div>
                                        <h4 class="header-title m-t-0 m-b-30"> Home Message</h4>
                                            <div class="form-group form-custom">
                                                <label class="col-md-2 control-label">Visible Message</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" value="<?php echo $messages[0]["value"]; ?>" type="text">
                                                </div>
                                                <br/>
                                            </div>

                                            <div class="form-group form-custom">
                                                <br/>
                                                <label class="col-md-2 control-label">Following Message</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" value="<?php echo $messages[1]["value"]; ?>" type="text">
                                                </div>
                                                <br/>
                                            </div>
                                            <br/>

                                        <h4 class="header-title m-t-0 m-b-30 "> Featured Sites</h4>
                                            <div class="append">
                                                <div class="form-group form-custom">
                                                    <br/>
                                                    <label class="control-label col-sm-2">Number of Featured Sites</label>
                                                    <div class="input-group bootstrap-touchspin col-md-10">


                                                        <input id="demo0" value="1" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" class="form-control" style="display: block;" type="text">

                                                    </div>
                                                    <br/>
                                                </div>
                                                <!-- <div class="form-group form-custom" id='copy'>
                                                    <br/>
                                                    <label class="col-sm-2 control-label">Featured Site #<a>1</a></label>
                                                    <div class="col-sm-10">
                                                         <select class="form-control select2">
                                                                <option value="EP-1">EP-1</option>
                                                                <option value="EP-2">EP-2</option>
                                                                <option value="EP-3">EP-3</option>
                                                        </select>
                                                    </div>
                                                    <br/>
                                                </div>  -->
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Adminto.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->




        </div>
        <!-- END wrapper -->



    <div id="con-close-modal" class="modal fade     " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-lg">
                <div class="modal-header  ">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title full-width-modalLabel">Add</h4>
                </div>
                <div class="modal-body">

                    <br/>
                    <h4 class="form-label-custom">Site Details </h4>
                    <hr>
                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Site Name</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-8">
                            <label for="field-1" class="control-label col-sm-2 text-right">Location</label>

                            <div class="col-sm-10" id="location-div">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Province</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-2 text-right">City</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-2 text-right">Street</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>



                    </div>

                    <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="field-1" class="control-label col-sm-3 text-right">Rental Cost</label>

                                <div class="col-sm-9" id="location-div">
                                    <input type="text" class="form-control" id="field-1"   >

                                </div>

                            </div>

                            <div class="form-group col-sm-8">
                                <label for="field-1" class="control-label col-sm-2 text-right">Format</label>

                                <div class="col-sm-10" id="location-div">
                                    <input type="text" class="form-control" id="field-1"   >

                                </div>

                            </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-right">CPSF</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-left">Ave. CPSF</label>

                            <div class="col-sm-10" id="location-div">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-right">CPM</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-left">Ave. CPM</label>

                            <div class="col-sm-10" id="location-div">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Traffic Count</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-2 text-right">Score</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Net. Audience.</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-2 text-right">X</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-right">Y</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>



                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="field-1" class="control-label col-sm-1 text-right">Remarks</label>

                            <div class="col-sm-11">
                                <textarea id="textarea" class="form-control" maxlength="225" rows="2" ></textarea>

                            </div>
                        </div>

                    </div>


                    <br/>
                    <h4 class="form-label-custom">Supplier Details </h4>
                    <hr>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Supplier Name</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Contact</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-2 text-right">Email</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>


                    </div>

                    <br/>
                    <h4 class="form-label-custom">Material Details </h4>
                    <hr>

                    <div class="row">

                        <div class="form-group col-sm-12">
                            <label for="field-1" class="control-label col-sm-1 text-right">Material</label>

                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-right">Category</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-right">Sub Category</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="field-1" class="control-label col-sm-4 text-right">Height</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="field-1" class="control-label col-sm-4 text-right">Ave H.</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="field-1" class="control-label col-sm-4 text-right">Width</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="field-1" class="control-label col-sm-4 text-right">Ave. W</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>




                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>

        <!-- jQuery  -->



    </body>

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script type="text/javascript">

        var number_of_fields= $('#demo0').val();

         $("input[name='demo0']").TouchSpin({
            buttondown_class: "btn btn-primary",
            buttonup_class: "btn btn-primary"
        });

        $(".select2").select2();

        append(number_of_fields);

        function append(times){
            for(ctr = 0; ctr < times; ctr++ ){

                $('.append').append('<div class="form-group copy form-custom"><br/><label class="col-sm-2 control-label">Featured Site #<a>'+(ctr+1)+'</a></label><div class="col-sm-10"><select class="form-control select2"><option value="EP-1">EP-1</option><option value="EP-2">EP-2</option><option value="EP-3">EP-3</option></select></div><br/></div>');
            }
             $(".select2").select2();

        }

        $('.bootstrap-touchspin-up').click(function(){
            var number_of_fields =  $('.append').find('.copy').length;
            console.log(number_of_fields);
             $('.append').append('<div class="form-group copy form-custom"><br/><label class="col-sm-2 control-label">Featured Site #<a>'+(number_of_fields+1)+'</a></label><div class="col-sm-10"><select class="form-control select2"><option value="EP-1">EP-1</option><option value="EP-2">EP-2</option><option value="EP-3">EP-3</option></select></div><br/></div>');


        });

        $('.bootstrap-touchspin-down').click(function(){
             var number_of_fields =  $('.append').find('.copy').length;
             ctr = 1;
             $('.copy').each(function(){
                if(ctr == number_of_fields){
                    $(this).remove();
                }
                ctr++;
             });

        });


    </script>


    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
    <script src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>


     <script src="<?php echo base_url(); ?>assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>


    <!-- <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

    <script src="<?php echo base_url(); ?>assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Problem with mobile... --><!--
     -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fixedColumns.min.js"></script>

    <!-- init -->
    <script src="<?php echo base_url(); ?>assets/pages/datatables.editable.site.init.js"></script>
    <script type="text/javascript" src="assets/js/custom.site.js"></script>




    <script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

</html>
