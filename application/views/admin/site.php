<!DOCTYPE html>
<html>

<!-- Mirrored from coderthemes.com/adminto_1.4/dark_menu/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2016 22:26:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <title>BluePen  </title>

    <link href="<?php echo base_url(); ?>	assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
    <!-- App css -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<!--     <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">


    <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css"> -->
    <!--   <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css"> -->

    <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />


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

            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Page title -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
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
                            <a href="<?php echo base_url(); ?>index.php/admin/group" class="waves-effect active"><i class="zmdi zmdi-accounts"></i> <span> Group Management </span> </a>
                        </li>

                        <li class="text-muted menu-title"><strong>Site Management</strong></li>

                        <li>
                            <a href="view-sites.html" class="waves-effect"><i class="zmdi zmdi-globe-alt"></i> <span> View Sites </span> </a>
                        </li>
                        <li>
                            <a href="edit-homepage.html" class="waves-effect"><i class="zmdi zmdi-home"></i> <span> Edit Homepage </span> </a>
                        </li>
                        <li>
                            <a href="site.html" class="waves-effect"><i class="zmdi zmdi-upload"></i> <span> Monthly Upload </span> </a>
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

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="m-b-30">
                                                <button id="addToTable" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="editable-responsive"  >
                                        <table class="table table-striped" id="datatable-editable"  >
                                            <thead>
                                                <tr>
                                                    <th class="text-left" style="width:60px">Site Ref</th>
                                                    <th class="text-center">Month</th>
                                                    <th class="text-center">Year</th>
                                                    <th class="text-center">Province</th>
                                                    <th class="text-center">City</th>
                                                    <th class="text-center">Street</th>
                                                    <th class="text-center">Location</th>
                                                    <th class="text-center">Supplier</th>
                                                    <th class="text-center">Supp. Contact</th>
                                                    <th class="text-center">Supp. Email</th>
                                                    <th class="text-center">Height</th>
                                                    <th class="text-center">Width</th>
                                                    <th class="text-center">Avg. Height</th>
                                                    <th class="text-center">Avg. Width</th>
                                                    <th class="text-center">Cost</th>
                                                    <th class="text-center">CPSF</th>
                                                    <th class="text-center">Avg. CPSF</th>
                                                    <th class="text-center">CPM</th>
                                                    <th class="text-center">Avg. CPM</th>
                                                    <th class="text-center">Format</th>
                                                    <th class="text-center">X</th>
                                                    <th class="text-center">Y</th>
                                                    <th class="text-center">Traffic Count</th>
                                                    <th class="text-center">Score</th>
                                                    <th class="text-center">Net Audience</th>
                                                    <th class="text-center">Remarks</th>
                                                    <th class="text-center">Material</th>
                                                    <th class="text-center">Category</th>
                                                    <th class="text-center">Sub-Category</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left" style="width:60px">Site Ref</td>
                                                    <td class="text-center">Month</td>
                                                    <td class="text-center">Year</td>
                                                    <td class="text-center">Province</td>
                                                    <td class="text-center">City</td>
                                                    <td class="text-center">Street</td>
                                                    <td class="text-center">Location</td>
                                                    <td class="text-center">Supplier</td>
                                                    <td class="text-center">Supp. Contact</td>
                                                    <td class="text-center">Supp. Email</td>
                                                    <td class="text-center">Height</td>
                                                    <td class="text-center">Width</td>
                                                    <td class="text-center">Avg. Height</td>
                                                    <td class="text-center">Avg. Width</td>
                                                    <td class="text-center">Cost</td>
                                                    <td class="text-center">CPSF</td>
                                                    <td class="text-center">Avg. CPSF</td>
                                                    <td class="text-center">CPM</td>
                                                    <td class="text-center">Avg. CPM</td>
                                                    <td class="text-center">Format</td>
                                                    <td class="text-center">X</td>
                                                    <td class="text-center">Y</td>
                                                    <td class="text-center">Traffic Count</td>
                                                    <td class="text-center">Score</td>
                                                    <td class="text-center">Net Audience</td>
                                                    <td class="text-center">Remarks</td>
                                                    <td class="text-center">Material</td>
                                                    <td class="text-center">Category</td>
                                                    <td class="text-center">Sub-Category</td>
                                                     <td class="actions text-center">
                                                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>

                                                <!--   <?php for ($i = 0; $i < count($groups); $i++): ?>
                                                   <?php $group = $groups[$i]; ?>
                                                   <tr class="gradeC">
                                                    <td class="text-left"><?php echo $group["group_name"]; ?>

                                                    </td>
                                                    <?php $privileges = $groupdata[$group["group_name"]]; ?>

                                                    <?php for ($j = 0; $j < count($privileges); $j++): ?>
                                                        <td class="text-center"><i class="<?php if ($privileges[$j]) echo "zmdi zmdi-check"; else echo "zmdi zmdi-close"; ?> "></i>

                                                        </td>

                                                    <?php endfor; ?>
                                                    <td class="actions text-center">
                                                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                <?php endfor; ?> -->

                                            </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end: panel body -->
                    </div> <!-- end panel -->
                </div> <!-- end col-->
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
</div>


</div>
</body>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->





<!-- END wrapper -->

 



<div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-lg">
                <div class="modal-header  ">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 id="title" class="modal-title full-width-modalLabel">Add</h4>
                </div>
                <div class="modal-body">

                     
                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-site" class="control-label col-sm-3 text-right">Site Name</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-site"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-mon" class="control-label col-sm-3 text-right">Month</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-mon"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-year" class="control-label col-sm-2 ">Year</label>

                            <div class="col-sm-10" id="location-div">
                                <input type="text" class="form-control" id="field-year"   >

                            </div>
                        </div>


                        
                    </div>
                    <div class="row">

                        <div class="form-group col-sm-12">
                            <label for="field-loc" class="control-label col-sm-1 ">Location</label>

                            <div class="col-sm-11" id="location-div">
                                <input type="text" class="form-control" id="field-loc"   >

                            </div>
                        </div>

                        
                    </div>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-prov" class="control-label col-sm-3 text-right">Province</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-prov"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-city" class="control-label col-sm-2 text-right">City</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-city"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-street" class="control-label col-sm-2 text-right">Street</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-street"   >

                            </div>
                        </div>



                    </div>

                    <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="field-rent" class="control-label col-sm-3 text-right">Rental Cost</label>

                                <div class="col-sm-9" id="location-div">
                                    <input type="text" class="form-control" id="field-rent"   >

                                </div>

                            </div>

                            <div class="form-group col-sm-8">
                                <label for="field-format" class="control-label col-sm-2 text-right">Format</label>

                                <div class="col-sm-10" id="location-div">
                                    <input type="text" class="form-control" id="field-format"   >

                                </div>

                            </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label for="field-cpsf" class="control-label col-sm-2 text-right">CPSF</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-cpsf"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-acpsf" class="control-label col-sm-2 text-left">Ave. CPSF</label>

                            <div class="col-sm-10" id="location-div">
                                <input type="text" class="form-control" id="field-acpsf"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label for="field-cpm" class="control-label col-sm-2 text-right">CPM</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-cpm"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-acpm" class="control-label col-sm-2 text-left">Ave. CPM</label>

                            <div class="col-sm-10" id="location-div">
                                <input type="text" class="form-control" id="field-acpm"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-traffic" class="control-label col-sm-3 text-right">Traffic Count</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-traffic"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-score" class="control-label col-sm-2 text-right">Score</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-score"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-neta" class="control-label col-sm-3 text-right">Net. Audience.</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-neta"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-x" class="control-label col-sm-2 text-right">X</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-x"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-y" class="control-label col-sm-2 text-right">Y</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-y"   >

                            </div>
                        </div>

                         <div class="form-group col-sm-4">
                            <label for="field-remarks" class="control-label col-sm-3 text-right">Remarks</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-remarks"   >

                            </div>
                        </div>



                    </div>

                   <!--  <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="field-1" class="control-label col-sm-1 text-right">Remarks</label>

                            <div class="col-sm-11">
                                <textarea id="textarea" class="form-control" maxlength="225" rows="2" ></textarea>

                            </div>
                        </div>

                    </div>
 -->

                    <br/>
                    <h4 class="form-label-custom">Supplier Details </h4>
                    <hr>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-suppname" class="control-label col-sm-3 text-right">Supplier Name</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-suppname"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-suppcontact" class="control-label col-sm-3 text-right">Contact</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-suppcontact"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-suppemail" class="control-label col-sm-2 text-right">Email</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-suppemail"   >

                            </div>
                        </div>


                    </div>

                    <br/>
                    <h4 class="form-label-custom">Material Details </h4>
                    <hr>

                    <div class="row">

                        <div class="form-group col-sm-12">
                            <label for="field-mat" class="control-label col-sm-1 text-right">Material</label>

                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="field-mat"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-matcat" class="control-label col-sm-2 text-right">Category</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-matcat"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-matsubcat" class="control-label col-sm-2 text-right">Sub Category</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-matsubcat"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="field-h" class="control-label col-sm-4 text-right">Height</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-h"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="field-ah" class="control-label col-sm-4 text-right">Ave H.</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-ah"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="field-w" class="control-label col-sm-4 text-right">Width</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-w"   >

                            </div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="field-aw" class="control-label col-sm-4 text-right">Ave. W</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-aw"   >

                            </div>
                        </div>




                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button id="save" type="button" class="btn btn-info waves-effect waves-light">Save </button>
                </div>
            </div>
        </div>
    </div>
    



<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>


<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>


<script src="<?php echo base_url(); ?>assets/plugins/custombox/dist/custombox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/custombox/dist/legacy.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script  src="<?php echo base_url(); ?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>

<!-- <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script> -->
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fixedColumns.min.js"></script>
<!-- Problem with mobile... -->


<!-- init -->
<script src="<?php echo base_url(); ?>assets/pages/datatables.editable.site.2.init.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.site.js"></script>



<script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script> -->

</html>
